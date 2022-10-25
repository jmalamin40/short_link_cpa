<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/login', [HomeController::class, 'home']);
Route::get('/register', [HomeController::class, 'home']);


Route::post('/generator-link', [HomeController::class, 'generator']);

Auth::routes();

Route::get('/home', [CustomerController::class, 'index'])->name('home');
Route::get('/Dashboard', [CustomerController::class, 'index'])->name('home');
Route::get('/logout', [CustomerController::class, 'index'])->name('home');

Route::get('/{link}', [HomeController::class, 'home_redirect']);

