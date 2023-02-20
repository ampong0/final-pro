<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
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


// Route::get('index',function(){
//     return view('index');
// });


Route::get('login',function(){
    return view('login');
});

Route::get('logout',[LoginController::class,'logout'])->name('logout.user');
Route::post('login',[LoginController::class,'logUser'])->name('login.user');
Route::post('/report',[ReportController::class,'store'])->name('report.store');

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('users',[UserController::class,'index'])->name('users');
Route::get('/user/add',[UserController::class,'create'])->name('users.add');
Route::post('/user/add',[UserController::class,'store'])->name('user.add');
Route::get('/users/fetch',[UserController::class,'fetchUsers']);
Route::get('/user/{id}/edit',[UserController::class,'edit']);
Route::post('/user/{id}/edit',[UserController::class,'update'])->name('user.update');

Route::get('/report',[ReportController::class,'index'])->name('users');
Route::get('/report/all',[ReportController::class,'fetchReports'])->name('reports.all');
Route::get('/report/add',[ReportController::class,'create'])->name('reports.add');
Route::get('/report/{id}/edit',[ReportController::class,'edit'])->name('reports.edit');

