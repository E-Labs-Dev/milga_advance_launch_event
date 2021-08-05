<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::group(['namespace'=>'Dashboard'],function () {

    Route::group(['middleware' => ['auth']], function () {

        Route::get('home', 'HomeController@index')->name('dashboard.home');

        Route::get('registrations/index', 'RegistrationController@index')->name('registrations.index');

        Route::get('registrations/attendees', 'RegistrationController@attendees')->name('registrations.attendees');

        Route::post('registrations/destroy', 'RegistrationController@destroy')->name('registrations.destroy');

        Route::post('registrations/change-status', 'RegistrationController@changeStatus')->name('registrations.changeStatus');

        Route::get('games/index', 'GameController@index')->name('games.index');
        Route::get('surveys/index', 'SurveyController@index')->name('surveys.index');

    });

});
