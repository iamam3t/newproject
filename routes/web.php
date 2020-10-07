<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('website.pages.welcome');
});
Route::get('/pricing', function () {
    return view('website.pages.pricing');
});

Auth::routes();

Route::get('/logout', function(){
    Session::flush();
    Auth::logout();
    return Redirect::to("/login")
        ->with('message', array('type' => 'success', 'text' => 'You have successfully logged out'));
})->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
