<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserJobController;
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

Route::get('/', [JobController::class, 'index']);
Route::get('/jobs/search', [JobController::class, 'search'])->middleware('auth');
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs/store', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/show/{id}', [JobController::class, 'show'])->middleware('auth');
Route::get('/jobs/list/{id}', [JobController::class, 'list'])->middleware('auth');
Route::get('/jobs/edit/{id}', [JobController::class, 'edit'])->middleware('auth');
Route::put('/jobs/update', [JobController::class, 'update'])->middleware('auth');
Route::delete('/jobs/delete/{id}', [JobController::class, 'destroy'])->middleware('auth');
Route::post('/jobs/compete/{id}', [JobController::class, 'compete'])->middleware('auth');
Route::delete('/jobs/delete/{id}', [JobController::class, 'destroy'])->middleware('auth');

Route::get('/users/create', [UserController::class, 'create'])->middleware('guest');
Route::put('/users/store', [UserController::class, 'store'])->middleware('guest');
Route::get('/users/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');
Route::get('/users/settings', [UserController::class, 'settings'])->middleware('auth');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::post('/users/update', [UserController::class, 'update'])->middleware('auth');
Route::post('/users/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/jobs/competitors/{id}', [UserJobController::class, 'competitors'])->middleware('auth');
Route::get('/jobs/competing/{id}',  [UserJobController::class, 'competing'])->middleware('auth');