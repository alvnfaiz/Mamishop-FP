<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\DashboardController;

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
Route::get('/dashboard', [DashboardController::class, 'dashboardUser'])->name('dashboard')->middleware(['auth', 'admin']);

//Store
Route::get('/store', [StoreController::class, 'index'])->name('store')->middleware(['auth', 'admin']);
Route::get('/store/create', [StoreController::class, 'create'])->name('store.create')->middleware(['auth', 'admin']);
Route::post('/store', [StoreController::class, 'store'])->name('store.store')->middleware(['auth', 'admin']);
Route::get('/store/{id}/edit', [StoreController::class, 'edit'])->name('store.edit')->middleware(['auth', 'admin']);
Route::put('/store/{id}', [StoreController::class, 'update'])->name('store.update')->middleware(['auth', 'admin']);
Route::delete('/store/{id}', [StoreController::class, 'destroy'])->name('store.destroy')->middleware(['auth', 'admin']);




Route::get('/', function () {
    return view('welcome');
})->name('home');
