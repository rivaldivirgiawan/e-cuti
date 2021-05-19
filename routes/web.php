<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveController;

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

Route::get('/', function () {
    return view('/authentication/login');
});

Route::get('/login', [AuthenticationController::class, 'login']);
Route::get('/home', function () {
    return view('/home');
});

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/employee-form', [EmployeeController::class, 'showForm']);
Route::post('/employee/create', [EmployeeController::class, 'create']);
Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit']);
Route::post('/employee/{id}/update', [EmployeeController::class, 'update']);
Route::get('/employee/{id}/delete', [EmployeeController::class, 'delete']);
Route::get('/employee/{id}/detail', [EmployeeController::class, 'employeeDetail']);
Route::get('/employee/exportexcel', [EmployeeController::class, 'exportExcel']);

Route::get('/leave', [LeaveController::class, 'index']);
Route::get('/leave/leave-form', [LeaveController::class, 'showForm']);
Route::post('/leave/create', [LeaveController::class, 'create']);
Route::get('/leave/approval', [LeaveController::class, 'approval']);
Route::get('/leave/detail', [LeaveController::class, 'detail']);
Route::get('/leave/print-leave', [LeaveController::class, 'printLeave']);

