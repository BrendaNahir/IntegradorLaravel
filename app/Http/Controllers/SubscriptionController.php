<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    //
}
use App\Models\Subscriber;

public function subscribe(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:subscribers,email',
    ]);

    Subscriber::create(['email' => $request->email]);

    return back()->with('success', '¡Te has suscrito exitosamente!');
}
