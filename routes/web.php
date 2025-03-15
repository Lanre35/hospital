<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureIsValid;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AppointmentController;


// login route.
Route::view('/', 'login')->name('login');


// signup route.

Route::view('/save', 'save')->name('signup');
Route::post('/save',[AuthController::class,'register']);

Route::post('/login', [AuthController::class, 'login']);
Route::view('/dashboard', 'dashboard')->middleware('verify')->name('dashboard');

Route::get('/logout', [AuthController::class,'logout']);
Route::view('profile','profile' )->middleware('verify');




// Patient resource route
Route::resource('patients',PatientController::class)->middleware('verify');

Route::view('/appoint', 'appoint')->name('appoint')->middleware('verify');
// Route::view('add-appointment', 'add-appointment')->name('add')->middleware('verify');

Route::view('/schedule', 'schedule')->name('schedule')->middleware('verify');

// Doctor

Route::resource('doctors',DoctorController::class)->middleware('verify');


// Route::view('departments', 'departments')->name('department')->middleware('verify');
// Route::view('add-department', 'add-department')->name('add-department')->middleware('verify');
Route::resource('departments',DepartmentController::class)->middleware('verify');

Route::resource('appointments',AppointmentController::class)->middleware('verify');

Route::view('employees','employees')->name('employees')->middleware('verify');


