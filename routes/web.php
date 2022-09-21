<?php

use App\Http\Controllers\AppointmentController;
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


//admin
Route::get('/allAppointments', [AppointmentController::class,'showAll'])->middleware('auth');
Route::get('/today', [AppointmentController::class,'today'])->middleware('auth');
Route::get('/pending', [AppointmentController::class,'pending'])->middleware('auth');
Route::get('/check', [AppointmentController::class,'checkAvailability'])->middleware('auth');
Route::post('/confirm', [AppointmentController::class,'confirm'])->middleware('auth');
//user
Route::get('/', function () {
    return view('user.home');
});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/contact', function () {
    return view('user.contact');
});
Route::get('/doctors', function () {
    return view('user.doctors');
});
Route::get('/services', function () {
    return view('user.services');
});

Route::post('/addAppointment',[AppointmentController::class,'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
