<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('sign_in');
Route::post('/', [UserController::class, 'login'])->name('sign_in.store');
Route::get('/sign-up', [UserController::class, 'create'])->name('sign_up');
Route::post('/sign-up', [UserController::class, 'store'])->name('sign_up.store');

// After Login
Route::get('/home', [UserController::class, 'home'])->name('home');
