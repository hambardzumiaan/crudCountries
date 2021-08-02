<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
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

Route::get('/countries', [CountryController::class, 'index']);
Route::get('/countries/create', [CountryController::class, 'create']);
Route::post('/countries/create', [CountryController::class, 'store']);
Route::get('/countries/edit/{id}', [CountryController::class, 'edit']);
Route::post('/countries/edit/{id}', [CountryController::class, 'update']);
Route::post('/countries/destroy/{id}', [CountryController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'admin']);