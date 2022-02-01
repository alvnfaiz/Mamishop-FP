<?php

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

//login register
Route::get('/login', [AuthController::class, 'loginUser'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction']);
Route::get('/register', [AuthController::class, 'registerUser'])->name('register');
Route::post('/register', [AuthController::class, 'registerAction']);

//dashboard user
Route::get('/dashboard', [DashboardController::class, 'dashboardUser'])->name('dashboard')->middleware('auth');




Route::get('/', function () {
    return view('welcome');
});
