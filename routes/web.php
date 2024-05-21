<?php

use App\Http\Controllers\TestNewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;


Route::get('/', function () {
    return view('principal');
});

Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');


Route::get('/', 'WelcomeController@indexprincipal');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth','adminUserRole']);

Route::get('password/reset/{token}', 'Auth\ForgotPasswordController@passwordReset')->name('password.reset');
Route::post('password/reset', 'Auth\ForgotPasswordController@passwordUpdate')->name('password.update');



Route::group([
    'middleware'    =>  ['auth','adminUserRole'],
    'prefix'        =>  'user'
],function(){
    Route::get('create','UserController@create')->name('user.create');
    Route::get('list','UserController@index')->name('user.index');
    Route::get('{user}/edit','UserController@edit')->name('user.edit');
    Route::post('store','UserController@store')->name('user.store');
    Route::post('search','UserController@searchUser')->name('user.search');
    Route::get('destroy','UserController@destroy')->name('user.destroy');
    Route::put('{user}/update', 'UserController@update')->name('user.update');
    Route::get('show','UserController@show')->name('user.show');

});
Route::resource('provider', ProviderController::class)->middleware('adminUserRole');
Route::resource('product', ProductController::class)->middleware('adminUserRole');
Route::resource('purchase', PurchaseProductController::class)->middleware('adminUserRole');
Route::resource('cart', CartController::class)->middleware('clientUserRole');
//si quiero entrar como administrador a 127.0.0.1/cart me lleva a la pag principal

