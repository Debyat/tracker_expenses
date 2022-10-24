<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExpensesController;
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
Route::get('/forgot-password', [UserController::class, 'forgot_password'])->name('forgot.password');
Route::post('/forgot-password', [UserController::class, 'check_user'])->name('forgot.check');

// After Login
Route::middleware('user')->group(function () {
    // New Password
    Route::get('/new-password', [UserController::class, 'create_password'])->name('create.password');
    Route::post('/new-password', [UserController::class, 'new_password'])->name('create.password.store');

    // Dasboard
    Route::get('/home', [ExpensesController::class, 'home'])->name('home');
    Route::get('/expenses', [ExpensesController::class, 'expenses'])->name('expenses');
    Route::get('/budget', [ExpensesController::class, 'budget'])->name('budget');

    // Logout
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
