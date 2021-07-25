<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
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



Route::get('/',[HomeController::class,'index']);
Route::get('/redirects',[HomeController::class,'redirects']);
//Admin
//User
Route::get('/user',[UserController::class,'index']);
Route::get('/delete-user/{id}',[UserController::class,'destroy']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
