<?php
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::middleware('admin')->prefix('/admin/category')->name('category.')->group(function(){
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/create', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

Route::middleware(['admin'])->prefix('/admin/product')->name('product.')->group(function(){
    Route::get('/', [ProductsController::class, 'index'])->name('index');
    Route::get('/create', [ProductsController::class, 'create'])->name('create');
    Route::post('/create', [ProductsController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}', [ProductsController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ProductsController::class, 'destroy'])->name('destroy');
});

//guest cart
Route::prefix('/cart')->name('cart.')->group(function(){
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::get('/create', [CartController::class, 'create'])->name('create');
    Route::post('/create', [CartController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CartController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}', [CartController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CartController::class, 'destroy'])->name('destroy');
});

//Order Crud admin & user middleware
Route::middleware('auth')->prefix('/order')->name('order.')->group(function(){
    Route::get('/', [OrderController::class, 'index'])->name('index');
    Route::get('/create', [OrderController::class, 'create'])->name('create');
    Route::post('/create', [OrderController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}', [OrderController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [OrderController::class, 'destroy'])->name('destroy');    
});

Route::get('/admin/settings', [SettingsController::class, 'index'])->name('settings')->middleware('admin');
Route::post('/admin/settings', [SettingsController::class, 'store'])->name('settings.store')->middleware('admin');

Route::middleware(['admin'])->prefix('/admin/banners')->name('banners.')->group(function(){
    Route::get('/', [BannersController::class, 'index'])->name('index');
    Route::get('/create', [BannersController::class, 'create'])->name('create');
    Route::post('/create', [BannersController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [BannersController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}', [BannersController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [BannersController::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth'])->prefix('/admin/message')->name('message.')->group(function(){
    Route::get('/', [MessageController::class, 'index'])->name('index');
    Route::get('/create', [MessageController::class, 'create'])->name('create');
    Route::post('/create', [MessageController::class, 'store'])->name('store');
});

Route::middleware(['auth'])->prefix('/review')->name('review.')->group(function(){
    Route::get('/', [ReviewController::class, 'index'])->name('index');
    Route::get('/{product_id}/create', [ReviewController::class, 'create'])->name('create');
    Route::post('/{product_id}/create', [ReviewController::class, 'store'])->name('store');
});


Route::get('/admin', [AdminController::class, 'index'])->name('dashboard')->middleware('admin');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware('admin')->name('dashboard');

require __DIR__.'/auth.php';

