<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Companies routes
Route::get('/companies',[CompaniesController::class,'index']);
Route::get('/companies/create',[CompaniesController::class,'create']);
Route::post('/companies',[CompaniesController::class,'store']);
Route::get('/companies/{company}',[CompaniesController::class,'show']);
Route::get('/companies/{company}/edit',[CompaniesController::class,'edit']);
Route::put('/companies/{company}',[CompaniesController::class,'update']);
Route::delete('/companies/{company}',[CompaniesController::class,'destroy']);

//Employees routes
Route::get('/employees',[EmployeesController::class,'index']);
Route::get('/employees/create',[EmployeesController::class,'create']);
Route::post('/employees',[EmployeesController::class,'store']);
Route::get('/employees/{employee}',[EmployeesController::class,'show']);
Route::get('employees/{employee}/edit',[EmployeesController::class,'edit']);
Route::put('/employees/{employee}',[EmployeesController::class,'update']);
Route::delete('/employees/{employee}',[EmployeesController::class,'destroy']);

