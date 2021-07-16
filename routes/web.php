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
    return view('auth.login');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::get('/users/store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('users/{user}/show', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::get('users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
