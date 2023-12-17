<?php

use App\Http\Controllers\IndexControler;
use App\Http\Controllers\LoginControl;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\islogin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [IndexControler::class, 'index'])->middleware('isLogin');

Route::get('/login', [LoginControl::class, 'index'])->middleware('isTamu');
Route::post('/user/login', [LoginControl::class, 'login']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('isTamu');
Route::post('/user/register', [RegisterController::class, 'regist']);
Route::get('/user/logout', [LoginControl::class, 'logout']);