<?php
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SettingsController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('admin')->prefix('/category')->name('category.')->group(function(){
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/create', [CategoryController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/{id}/edit', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [CategoryController::class, 'destroy'])->name('destroy');
});

Route::middleware(['admin'])->prefix('/product')->name('category.')->group(function(){
    Route::get('/', [ProductsController::class, 'index'])->name('index');
    Route::get('/create', [ProductsController::class, 'create'])->name('create');
    Route::post('/create', [ProductsController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [ProductsController::class, 'edit'])->name('edit');
    Route::put('/{id}/edit', [ProductsController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [ProductsController::class, 'destroy'])->name('destroy');
});

//guest cart
Route::prefix('/cart')->name('cart.')->group(function(){
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::get('/create', [CartController::class, 'create'])->name('create');
    Route::post('/create', [CartController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [CartController::class, 'edit'])->name('edit');
    Route::put('/{id}/edit', [CartController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [CartController::class, 'destroy'])->name('destroy');
});

//Order Crud admin & user middleware
Route::middleware('auth')->prefix('/order')->name('order.')->group(function(){
    Route::get('/', [OrderController::class, 'index'])->name('index');
    Route::get('/create', [OrderController::class, 'create'])->name('create');
    Route::post('/create', [OrderController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [OrderController::class, 'edit'])->name('edit');
    Route::put('/{id}/edit', [OrderController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [OrderController::class, 'destroy'])->name('destroy');    
});

Route::get('/admin/settings', [SettingsController::class, 'index'])->name('settings.index')->middleware('admin');
Route::post('/admin/settings', [SettingsController::class, 'store'])->name('settings.store')->middleware('admin');

Route::middleware(['admin'])->prefix('/product')->name('banners.')->group(function(){
    Route::get('/', [BannersController::class, 'index'])->name('index');
    Route::get('/create', [BannersController::class, 'create'])->name('create');
    Route::post('/create', [BannersController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [BannersController::class, 'edit'])->name('edit');
    Route::put('/{id}/edit', [BannersController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [BannersController::class, 'destroy'])->name('destroy');
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['user', 'admin'])->name('dashboard');

require __DIR__.'/auth.php';

