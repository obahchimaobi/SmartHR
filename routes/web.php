<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,'index'])->name('home');

// Employee Routings
Route::get('/employee-register', [EmployeeController::class, 'employee_register'])->name('employee.register');
Route::get('/employee-login', [EmployeeController::class, 'employee_login'])->name('employee.login');

Route::post('/employee-register', [EmployeeController::class, 'register'])->name('employee-register');
Route::post('/employee-login', [EmployeeController::class, 'login'])->name('employer-login');

// Employee dashboards and the rests
Route::get('/employee-dashboard', [EmployeeController::class, 'employee_dashboard'])->name('employee.dashboard');