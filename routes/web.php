<?php

use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;

use Illuminate\Support\Facades\Route;

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
Route::get('/', [homeController::class, 'index']);
Route::get('/register', [registerController::class,'registerPage']);
Route::post('/register', [registerController::class, 'register']);
Route::get('/login',[loginController::class, 'loginPage']);
Route::post('/login',[loginController::class, 'login']);

// ini route


