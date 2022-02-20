<?php

use App\Http\Controllers\registerController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\userController;
use App\Http\Controllers\enrollController;

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

Route::get('/about', [aboutController::class, 'aboutPage']);

Route::get('/home', [homeController::class, 'index']);

Route::get('/user', [userController::class, 'showProfile']);

Route::get('/home', [courseController::class, 'showPopularCourse']);
Route::get('/course', [courseController::class, 'showAllCourse']);

Route::get('/', [registerController::class,'registerPage']);
Route::post('/register', [registerController::class, 'register']);

Route::get('/login',[loginController::class, 'loginPage']);
Route::post('/login',[loginController::class, 'login']);

Route::get('/search', [courseController::class, 'search']);

Route::get('/enroll', [enrollController::class, 'enroll']);

// ini route


