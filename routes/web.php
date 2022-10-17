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

Route::get('users', ['uses'=>'UserController@index', 'as'=>'users.index']);

Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');



// Route::get('addmoney/stripe', array('as' => 'addmoney.paystripe','uses' => 'MoneySetupController@PaymentStripe'));
// Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'MoneySetupController@postPaymentStripe'));


Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
