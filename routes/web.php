<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseController;

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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard'); 
    Route::resource('users', UserController::class);
    Route::resource('medics', MedicalController::class);

    Route::get('category_create', [CategoryController::class, 'create'])->name('category_create');
    Route::post('category_store', [CategoryController::class, 'store'])->name('category_store');

    Route::resource('suppliers', SupplierController::class);

    Route::resource('purchases', PurchaseController::class);
});

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('login', [AuthController::class, 'index'])->name('login');