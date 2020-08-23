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
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about');
});
Route::get('/invest-with-us', function () {
    return view('about');
});
Route::get('/why-invest', function () {
    return view('whyInvest');
});

<<<<<<< HEAD
Route::get('/plans', function () {
    return view('plans');
});

=======
Route::get('/contact-us', function () {
    return view('contact');
});
>>>>>>> b1602c6f4436bec74b082bd57e394eea8e2b2294

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
