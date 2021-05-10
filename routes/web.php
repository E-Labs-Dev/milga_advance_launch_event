<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/',[WebsiteController::class,'index'])->name('home');

Route::post('registrations/store',[RegistrationController::class,'store'])->name('registrations.store');

/*todo put this rout in admin group */
Route::get('admin/home', [HomeController::class, 'index'])->name('dashboard.home');
Route::get('admin/registrations/index',[RegistrationController::class,'index'])->name('registrations.index');
Route::get('admin/registrations/create',[RegistrationController::class,'create'])->name('registrations.create');
