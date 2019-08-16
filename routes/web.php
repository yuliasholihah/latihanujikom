<?php

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
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['register' => false]);


Route::group(['prefix' => 'backend','middleware'=> ['auth','role:admin']], function () {
    Route::resource('user', 'UserController');
    Route::resource('motor', 'MotorController');
    Route::resource('pembeli', 'PembeliController');
    Route::resource('bayar cicilan', 'BayarCicilanController');
    Route::resource('beli cash', 'BeliCashController');
    Route::resource('beli kridit', 'BeliKriditController');
    Route::resource('kridit paket', 'KriditPaketController');
});

    


