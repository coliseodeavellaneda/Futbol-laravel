<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\ArgentinoController;
use App\Http\Controllers\EuropeoController;
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

Route::get('/error', [ErrorController::class,'index']);
Route::resource('/argentino', ArgentinoController::class);
Route::get('/', [HomeController::class, 'call']);
Route::resource('/europeo', EuropeoController::class);