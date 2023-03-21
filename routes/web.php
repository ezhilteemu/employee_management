<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('newdashboard');
    })->name('dashboard');
});
Route::middleware(['auth'])->group(function () {
    Route::controller(EmployeeController::class)->group(function () {
        Route::get('/logout', 'Logout')->name('dashboard.logout');
        Route::get('/employeepage', 'EmployeePage')->name('employee.page');
        Route::post('/employee/submit', 'SubmitEmployee')->name('employee.submit');
        Route::get('/edit/employee/{id}', 'EditEmployee')->name('employee.edit');
        Route::put('/update/employee/{id}', 'UpdateEmployee')->name('employee.update');
        Route::delete('/delete/employee/{id}', 'DeleteEmployee')->name('employee.delete');
    });
});
