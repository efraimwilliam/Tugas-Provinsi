<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
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


Route::get('/', [BackendController::class, 'form']);

Route::get('/createprovinsi', [BackendController::class, 'createviewprovinsi']);

Route::get('/createkabupaten', [BackendController::class, 'createviewkabupaten']);

Route::get('/editkabupaten/{id}', [BackendController::class, 'editviewkabupaten']);

Route::post('/submitformprovinsi', [BackendController::class, 'submitformprovinsi']);

Route::post('/submitformkabupaten', [BackendController::class, 'submitformkabupaten']);

Route::put('/submiteditkabupaten/{id}', [BackendController::class, 'submiteditkabupaten']);

Route::get('/viewkabupaten/{id}', [BackendController::class, 'viewkabupaten']);

Route::delete('/delete/{id}', [BackendController::class, 'deletekabupaten']);


Route::get('/editprovinsi/{id}', [BackendController::class, 'editviewprovinsi']);

Route::put('/submiteditprovinsi/{id}', [BackendController::class, 'submiteditprovinsi']);

Route::get('/viewprovinsi/{id}', [BackendController::class, 'viewprovinsi']);

Route::delete('/deleteprovinsi/{id}', [BackendController::class, 'deleteprovinsi']);