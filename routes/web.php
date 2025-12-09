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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/", [App\Http\Controllers\MyController::class, 'index'])->name('Maksim');
Route::get("/auth", [App\Http\Controllers\MyController::class, 'auth'])->name('auth');
Route::get("/registration", [App\Http\Controllers\MyController::class, 'registration'])->name('register');
Route::get("/basket", [App\Http\Controllers\MyController::class, 'basket'])->name('basket');
Route::get("/catalog", [App\Http\Controllers\MyController::class, 'catalog'])->name('catalog');
Route::get("/location", [App\Http\Controllers\MyController::class, 'location'])->name('location');
Route::get("/orders", [App\Http\Controllers\MyController::class, 'orders'])->name('orders');
Route::get("/product/{id}", [App\Http\Controllers\MyController::class, 'product'])->name('product');


