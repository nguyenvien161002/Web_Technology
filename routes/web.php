<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, "index"]);
Route::get('/trang-chu', [HomeController::class, "index"]);
Route::get('/tin-tuc', [NewsController::class, "index"]);
Route::get('/san-pham', [ProductsController::class, "index"]);
Route::get('/lien-he', [ContactController::class, "index"]);
Route::get('/admin', [AdminController::class, "index"]);
Route::get('/dashboard', [AdminController::class, "show_dashboard"]);
