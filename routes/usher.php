<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Usher'],function () {

    Route::get('/usher/login', 'LoginController@showLoginForm')->name('usher.login');

    Route::post('usher/login', 'LoginController@login')->name('usher.process');

    Route::group(['middleware' => ['auth:usher']], function () {

        Route::get('usher/home', 'HomeController@index')->name('usher.home');

        Route::get('{userCode}/show', 'RegistrationController@show')->name('registrations.show');

        Route::post('registrations/attend', 'RegistrationController@attend')->name('registrations.attend');

        Route::post('registrations/search', 'SearchController@index')->name('registrations.search');

    });
});
