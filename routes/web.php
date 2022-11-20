<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;

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

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm']);
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin', [AdminController::class, 'index']);//->middleware('auth:admin');
Route::get('/{film}', [HomeController::class, 'detail'])->name('film.detail');
Route::get('/', [HomeController::class, 'index']);


