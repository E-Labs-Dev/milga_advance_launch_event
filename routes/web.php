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




Auth::routes(['register' => false]);

Route::get('admin/home', [HomeController::class, 'index'])->name('home');
Route::post('registrations/store',[RegistrationController::class,'store'])->name('registrations.store');
Route::get('admin/registrations/index',[RegistrationController::class,'index'])->name('registrations.index');
Route::get('admin/registrations/create',[RegistrationController::class,'create'])->name('registrations.create');
