<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontendRegisterController;
use App\Http\Controllers\FrontendLoginController;
use App\Http\Controllers\AdminConditionsController;
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
 
 
    Route::resource('/expert', ExpertController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('permissions', PermissionsController::class);