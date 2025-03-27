<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureIsValid;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\LeaveTypeController;
use App\Models\LeaveType;

//login route.
Route::view('/', 'login')->name('login');
Route::post('/login', [AuthController::class, 'login']);


// signup route.
Route::view('/save', 'save')->name('signup');
Route::post('/save',[AuthController::class,'register']);

Route::view('/dashboard', 'dashboard')->middleware('verify')->name('dashboard');
Route::get('/logout', [AuthController::class,'logout']);


// Patient resource route
Route::resource('patients',PatientController::class)->middleware('verify');


// appointment route
Route::view('/appoint', 'appoint')->name('appoint')->middleware('verify');
Route::resource('appointments',AppointmentController::class)->middleware('verify');

// schedule route
Route::resource('schedule',ScheduleController::class)->middleware('verify');

// Doctor route
Route::resource('doctors',DoctorController::class)->middleware('verify');
Route::get('doctors/editProfile/{id}',[DoctorController::class,'editProfile'])->middleware('verify');


// Department route
Route::resource('departments',DepartmentController::class)->middleware('verify');


// Employees route
Route::resource('employees',EmployeesController::class)->middleware('verify');

// leaves route

Route::resource('leave',LeaveController::class)->middleware('verify');
Route::resource('leave-type',LeaveTypeController::class)->middleware('verify');

// settings route
Route::resource('settings',SettingController::class)->middleware('verify');
// Roles & Permissions route
Route::resource('roles', RoleController::class)->middleware('verify');

