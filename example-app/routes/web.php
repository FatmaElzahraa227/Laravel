<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;
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


//

Route::view("/","welcome");
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users', [UserController::class, 'store'])->name('users.index');

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/users/{name}/{email}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::fallback(function () {
    return '<h1>Error, try again</h1>';
    });