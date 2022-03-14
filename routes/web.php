<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/getReg_regencies', [HomeController::class, 'getReg_regencies']);
Route::get('/getReg_districts', [HomeController::class, 'getReg_districts']);
Route::get('/getReg_villages', [HomeController::class, 'getReg_villages']);