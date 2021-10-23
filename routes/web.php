<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FromValidation;

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



Route::get('/',[FromValidation::class,'loginpage'])->name('loginpage');
Route::post('/',[FromValidation::class,'submit'])->name('loginpage');
Route::get('/registrationpage',[FromValidation::class,'registration'])->name('registrationpage');
Route::post('/registrationpage',[FromValidation::class,'submit'])->name('registrationpage');
Route::get('/contactpage',[FromValidation::class,'contact'])->name('contactpage');
Route::post('/contactpage',[FromValidation::class,'send'])->name('contactpage');
