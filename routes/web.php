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
})->name('home');

Route::get('/about-us', function () {
    return view('website.pages.about-us');
})->name('about-us');

Route::get('/training', function () {
    return view('website.pages.training');
})->name('training');

Route::get('/pricing', function () {
    return view('website.pages.pricing');
})->name('pricing');

Route::get('/hire-me', function () {
    return view('website.pages.hire-me');
})->name('hire-me');

Auth::routes();

Route::get('/logout', function(){
    Session::flush();
    Auth::logout();
    return Redirect::to("/login")
        ->with('message', array('type' => 'success', 'text' => 'You have successfully logged out'));
})->name('logout');


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
