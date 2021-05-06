<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
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


Route::post('registration',['as'=>'registration','uses'=>[RegistrationController::class,'store']]);

Auth::routes(['register' => false]);

Route::get('admin/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/registrations',[RegistrationController::class,'index'])->name('registrations.index');
