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

    Route::post('{userCode}/show','RegistrationController@show')->name('registrations.show');

});

Route::group(['prefix' => 'admin','namespace'=>'Dashboard'],function () {
    Route::get('admin/home', 'HomeController@index')->name('dashboard.home');
    Route::get('admin/registrations/index','RegistrationController@store')->name('registrations.index');
});
