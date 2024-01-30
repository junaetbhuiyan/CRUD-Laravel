<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Product', [ProductController::class, 'index'])->name ('product.index');
Route::get('/Product/create', [ProductController::class, 'create'])->name('product.create');
Route::POST('/Product', [ProductController::class, 'store'])->name ('product.store');
Route::get('/Product/{product}/edit', [ProductController::class, 'edit'])->name ('product.edit');
Route::put('/Product/{product}/update', [ProductController::class, 'update'])->name ('product.update');
Route::delete('/Product/{product}/destroy', [ProductController::class, 'destroy'])->name ('product.destroy');
