<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::group(['namespace'=>'Dashboard'],function () {
    Route::group(['middleware' => ['auth']], function () {

        Route::get('home', 'HomeController@index')->name('dashboard.home');

        Route::get('registrations/index', 'RegistrationController@index')->name('registrations.index');

        Route::post('registrations/destroy', 'RegistrationController@destroy')->name('registrations.destroy');
    });
});
