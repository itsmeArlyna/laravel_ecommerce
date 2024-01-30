<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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
Route::get('/signup/create', [ UserController ::class, 'create'])->name('users.create');
Route::post('/signup', [ UserController ::class, 'store'])->name('users.store');
Route::get('/login', [ UserController ::class, 'index'])->name('users.login');
Route::get('/signup', [ UserController ::class, 'create'])->name('users.signup');
Route::get('/', [ HomeController ::class, 'index'])->name('product.index');
Route::get('/display', [ HomeController ::class, 'index'])->name('product.display');
Route::get('/product', [ ProductController ::class, 'index'])->name('product.index');
Route::get('/product/create', [ ProductController ::class, 'create'])->name('product.create');
Route::post('/product', [ ProductController ::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ ProductController ::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ ProductController ::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ ProductController ::class, 'destroy'])->name('product.destroy');
Route::get('/', [ProductController::class, 'index']);
Route::post('/search', [ProductController::class, 'search']);