<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\logincontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'index']);
Route::get('/login', [logincontroller::class, 'store']);


