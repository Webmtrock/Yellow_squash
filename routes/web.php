<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\WebinarsController;
use App\Http\Controllers\Admin\ProgramsController;



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
// Route::get('/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin/dashboard');
Route::get('/register', [AdminLoginController::class, 'registerindex'])->name('admin/register');
Route::post('/register', [AdminLoginController::class, 'store'])->name('admin/store');
Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin/logout');


Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin/dashboard');

//  //login-Register
// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/login', [AdminLoginController::class, 'index'])->name('admin/login');
//     Route::post('/login', [AdminLoginController::class, 'login'])->name('admin/getlogin');
//     Route::get('/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin/dashboard');
//     Route::get('/register', [AdminLoginController::class, 'registerindex'])->name('admin/register');
//     Route::post('/register', [AdminLoginController::class, 'store'])->name('admin/store');
//     Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin/logout');
//     Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin/logout');

// });
//role and permission
    Route::resource('roles', RolesController::class);
    Route::resource('permissions', PermissionsController::class);
    Route::resource('webinars', WebinarsController::class);

//Expert
    Route::resource('/expert', ExpertController::class);
    Route::post('/expert/create', [ExpertController::class, 'store'])->name('expert.store');
    Route ::get('expert/{id}/edit',[ExpertController::class, 'edit']);
    Route ::put('/expert/{id}/update',[ExpertController::class, 'update'])->name('expert.update');
    Route::delete('expert/{id}/delete', [ExpertController::class, 'destroy'])->name('expert.destroy');


// Users 

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');

// Categories
    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/update/{id}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::delete('/categories/delete/{id}', [CategoriesController::class, 'delete'])->name('categories.delete');

//Article
    Route::resource('article', ArticleController::class);
    Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
    // Route::delete('article/delete/{id}', [ArticleController::class, 'delete'])->name('article.delete');
    Route::delete('article/delete/{id}', [ArticleController::class, 'destroy'])->name('article.delete');

    

    
   //experts

// Route::resource('/expert', ExpertController::class);
// Route::post('/expert/create', [ExpertController::class, 'store'])->name('expert.store');
// Route ::get('expert/{id}/edit',[ExpertController::class, 'edit']);
// Route ::put('/expert/{id}/update',[ExpertController::class, 'update'])->name('expert.update');
// // Route::put('/experts/{expert}', 'ExpertController@update')->name('experts.update');
// Route::delete('expert/{id}/delete', 'ExpertController@destroy')->name('expert.destroy');
// Route::resource('roles', RolesController::class);
//     Route::resource('permissions', PermissionsController::class);
//     Route::resource('permissions', PermissionsController::class);

    //programs

    Route::get('/programs', [ProgramsController::class, 'index'])->name('programs.index');
    Route::get('/programs/create', [ProgramsController::class, 'create'])->name('programs.create');
    Route::post('/programs/store', [ProgramsController::class, 'store'])->name('programs.store');
    Route::get('/programs/edit/{id}', [ProgramsController::class, 'edit'])->name('programs.edit');
    Route::put('/programs/update/{id}', [ProgramsController::class, 'update'])->name('programs.update');
    Route::delete('/programs/delete/{id}', [ProgramsController::class, 'delete'])->name('programs.delete');  


});