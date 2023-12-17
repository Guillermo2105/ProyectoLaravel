<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\product\ProductoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SectionController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('layouts.principal');
});*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/product', [ProductoController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [ProductoController::class, 'show'])->name('product.show');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

//Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/productos', [ProductAdminController::class, 'create'])->name('productos');
Route::get('/productos/{id}', [ProductAdminController::class, 'edit'])->name('productos.edit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('purchases', PurchaseController::class);//se genero un controlador de recurso y ademas se enlazo al modelo//
Route::resource('sections', SectionController::class);//se genero un controlador de recurso y ademas se enlazo al modelo//
require __DIR__.'/auth.php';

