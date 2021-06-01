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

Route::group(['namespace'=>'Website'],function () {

    Route::get('/','HomeController@index')->name('home');

    Route::get('profile','ProfileController@index')->name('profile');

    Route::get('/agenda','AgendaController@index')->name('agenda');

    Route::post('/login','LoginController@store')->name('user.login');

    Route::post('registrations/store','RegistrationController@store')->name('registrations.store');

});
