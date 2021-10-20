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

//create
Route::get('/createprovinsi', [BackendController::class, 'createviewprovinsi']);

//submit create post
Route::post('/submitformprovinsi', [BackendController::class, 'submitformprovinsi']);

//read provinsi
Route::get('/viewprovinsi/{id}', [BackendController::class, 'viewprovinsi']);

//edit page
Route::get('/editprovinsi/{id}', [BackendController::class, 'editviewprovinsi']);


//submit edit
Route::put('/submiteditprovinsi/{id}', [BackendController::class, 'submiteditprovinsi']);

//delete
Route::delete('/deleteprovinsi/{id}', [BackendController::class, 'deleteprovinsi']);



Route::get('/createkabupaten', [BackendController::class, 'createviewkabupaten']);

Route::post('/submitformkabupaten', [BackendController::class, 'submitformkabupaten']);

Route::get('/viewkabupaten/{id}', [BackendController::class, 'viewkabupaten']);

Route::get('/editkabupaten/{id}', [BackendController::class, 'editviewkabupaten']);

Route::put('/submiteditkabupaten/{id}', [BackendController::class, 'submiteditkabupaten']);

Route::delete('/delete/{id}', [BackendController::class, 'deletekabupaten']);





Route::get('/createkecamatan', [BackendController::class, 'createviewkecamatan']);

Route::post('/submitformkecamatan', [BackendController::class, 'submitformkecamatan']);

Route::get('/viewkecamatan/{id}', [BackendController::class, 'viewkecamatan']);

Route::get('/editkecamatan/{id}', [BackendController::class, 'editviewkecamatan']);

Route::put('/submiteditkecamatan/{id}', [BackendController::class, 'submiteditkecamatan']);