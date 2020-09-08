<?php

use App\Http\Controllers\PaymentController;
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
Route::get('/blue-chips-bond', function () {
    return view('blueChipsNetworkBond');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/users/payment_confirmation', 'PaymentController@userPayment')->name('payment.confirmation');
Route::post('/users/confirmed', 'PaymentController@userPaymentconfirmed')->name('payment.confirmed');

Route::group(['middleware' => ['role:User']], function () {
    Route::get('/users/plan/{plans}', 'PlanController@plans')->name('plans');

    Route::resource('/users/plans','PlanController');
    Route::get('/users/account_wallet', 'CryptoWalletController@wallet')->name('wallet');
    Route::resource('/users/crypto_wallet', 'CryptoWalletController');

    Route::get('/users/purchase_plan', function () {
        return view('users.purchasePlan');
    });
    Route::resource('/users/payout_request', 'PayoutController');
    Route::get('/users/transcations', 'TransactionController@userTranscations')->name('transaction.users');

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
    Route::resource('transcations', 'TransactionController');

});




