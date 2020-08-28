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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/why-invest', function () {
    return view('whyInvest');
});
Route::get('/plans', function () {
    return view('plans');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/delta-crypto-bond', function () {
    return view('deltaCryptoBond');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:User']], function () {
    Route::get('/basic', function () {
        return view('welcome');
    });
    Route::get('/silver', function () {
        return view('welcome');
    });
    Route::get('/gold', function () {
        return view('welcome');
    });
    Route::get('/platnuim', function () {
        return view('welcome');
    });
    Route::get('/users/plans', function () {
        return view('users.plans');
    });
});

Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('/basic', function () {
        return view('welcome');
    });
    Route::get('/silver', function () {
        return view('welcome');
    });
    Route::get('/gold', function () {
        return view('welcome');
    });
    Route::get('/platnuim', function () {
        return view('welcome');
    });
    
});




