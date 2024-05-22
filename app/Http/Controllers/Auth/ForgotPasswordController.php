<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use App\Models\Role;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;
use App\Jobs\SendEmailForgotPasswordJob;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function sendResetLinkEmail(Request $request){
        $login = $request->input($this->username());

        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        switch ($field) {
            case 'username':
                $user = User::where('username', $login)->first();
                break;
            case 'email':
                $user = User::where('email', $login)->first();
                break;
        }

        if (is_null($user)) {
            $this->statusReturn(400, 'El email no existe');
            return redirect()->back();
        }

        $codeToken = Str::random(60);
        session(['codeToken' => $codeToken, 'emailReset' => $user->email]);
        $passwordReset = PasswordReset::where('email', $user->email)->first();

        if (is_null($passwordReset)) {
            PasswordReset::create([
                'email' =>  $user->email,
                'token' =>  $codeToken,
                'created_at' =>  now()
            ]);
        } else {
            $passwordReset->token = $codeToken;
            $passwordReset->save();
        }

        SendEmailForgotPasswordJob::dispatch($user, $codeToken);

        $this->statusReturn(200, 'Se envió un email');
        return redirect()->back();
    }

    public function username(){
        return 'login';
    }

    public function passwordReset(Request $request){
        $passwordReset = PasswordReset::where('email', session('emailReset'))
            ->where('token', session('codeToken'))->first();

        if (!$passwordReset) return redirect()->back();

        $email = $passwordReset->email;
        $token = $passwordReset->token;

        return view('auth.passwords.reset', compact('email', 'token'));
    }

    public function passwordUpdate(Request $request){
        $validate = $this->checkPassword($request->password, $request->password_confirmation);
        if (!$validate) {
            $this->statusReturn(400, 'Las contraseñas no coinciden');
            return redirect()->back();
        }

        $passwordReset = PasswordReset::where('email', session('emailReset'))
            ->where('token', session('codeToken'))->first();

        if (!$passwordReset) {
            $this->emptySession();
            $this->statusReturn(400, 'Las credenciales no coinciden');
            return redirect()->back();
        }

        $user = User::where('email', $passwordReset->email)->first();
        if (!$user) {
            $this->emptySession();
            $this->statusReturn(400, 'Usuario no encontrado');
            return redirect()->back();
        }

        // Cargar roles del usuario
        $user->load('roles');
        

        $user->password = Hash::make($request->password);
        $user->save();
        $passwordReset->delete();

        $this->emptySession();
        $this->statusReturn(200, 'Contraseña actualizada exitosamente');

        return response()->json($user); // Devolver el usuario con roles en la respuesta JSON
    }

    protected function emptySession(){
        Session::forget(['codeToken', 'emailReset']);
    }

    protected function checkPassword($password, $passwordConfirmation){
        return $password === $passwordConfirmation;
    }

    protected function statusReturn($status, $message){
        if ($status == 200) {
            Session::flash('flash_message', $message);
            Session::flash('flash_message_class', 'success');
        } else {
            Session::flash('flash_message', $message);
            Session::flash('flash_message_class', 'danger');
        }
    }
}
