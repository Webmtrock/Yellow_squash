<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\ExpertController;
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
 
<<<<<<< HEAD
// Backend Routes 
Route::get('/login', [AdminLoginController::class, 'index'])->name('admin/login');
Route::post('/login', [AdminLoginController::class, 'login'])->name('admin/getlogin');
Route::get('/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin/dashboard');
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
   
// });
=======
 //login-Register
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('admin/login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin/getlogin');
    Route::get('/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin/dashboard');
    Route::get('/register', [AdminLoginController::class, 'registerindex'])->name('admin/register');
    Route::post('/register', [AdminLoginController::class, 'store'])->name('admin/store');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin/logout');
    Route::GET('/conditions-we-cover ', [AdminConditionsController::class, 'conditionWweCover'])->name('admin/conditionWweCover');
   
});
//role and permission
Route::resource('roles', RolesController::class);
Route::resource('permissions', PermissionsController::class);

//Expert
Route::resource('/expert', ExpertController::class);
Route::post('/expert/create', [ExpertController::class, 'store'])->name('expert.store');
Route ::get('expert/{id}/edit',[ExpertController::class, 'edit']);
Route ::put('/expert/{id}/update',[ExpertController::class, 'update'])->name('expert.update');
Route::delete('expert/{id}/delete', [ExpertController::class, 'destroy'])->name('expert.destroy');