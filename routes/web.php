<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Admin\UserController;

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

// Backend Routes 
Route::get('/login', [AdminLoginController::class, 'index'])->name('admin/login');
Route::post('/login', [AdminLoginController::class, 'login'])->name('admin/getlogin');
Route::get('/register', [AdminLoginController::class, 'registerindex'])->name('admin/register');
Route::post('/register', [AdminLoginController::class, 'store'])->name('admin/store');
Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin/logout');



Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin/dashboard');

    // Users 

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');

});

//oute::get('/admin/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin/dashboard')->middleware(['auth','admin']);