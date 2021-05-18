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

Auth::routes(['register' => false]);

Route::group(['namespace'=>'Website'],function () {

    Route::get('/','HomeController@index')->name('home');

    Route::post('registrations/store','RegistrationController@store')->name('registrations.store');

});

Route::group(['namespace'=>'Dashboard'],function () {

    Route::group(['prefix' => 'admin'],function () {

        Route::get('home', 'HomeController@index')->name('dashboard.home');

        Route::get('registrations/index','RegistrationController@index')->name('registrations.index');

        Route::post('registrations/destroy','RegistrationController@destroy')->name('registrations.destroy');

    });

    Route::get('{userCode}/show','RegistrationController@show')->name('registrations.show');

    Route::post('registrations/attend','RegistrationController@attend')->name('registrations.attend');

});
