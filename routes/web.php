<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\DatabaseController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //return redirect('indexmodel');
    return view('dashboard');
})->name('dashboard');
//********************query builder ****************************
Route::get("index",[DatabaseController::class,'index'])->middleware('auth');

//*********************query builder****************************

//aggrigate methods by query
Route::get("operation",[DatabaseController::class,'operations'])->middleware('auth');
Route::get("summaary",[DatabaseController::class,'operations'])->middleware('auth');
Route::view("summaary","summaary");

//aggrigate methods by query---->end








//***************************data manipulation***********************
//specified for model 
Route::view("datainsert","datainsert")->middleware('auth');
Route::post("datainsert",[DatabaseController::class,'datainsert'])->middleware('auth');
Route::get("delete/{id}",[DatabaseController::class,'datadelete'])->middleware('auth');
Route::get("edit/{id}",[DatabaseController::class,'dataedit'])->middleware('auth');
Route::post("edit",[DatabaseController::class,'update'])->middleware('auth');
Route::get("indexmodel",[DatabaseController::class,'indexmodel'])->middleware('auth');
//***********************end data manipulation***********************
