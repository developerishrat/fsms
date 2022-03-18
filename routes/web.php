<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\PurchaseController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/adduser',[HomeController::class,'add']);
Route::post('/users/insert',[HomeController::class,'insert']);


//Fuel
Route::get('/addfuel',[FuelController::class,'index']);
Route::post('/fuel/insert',[FuelController::class,'insert']);
Route::get('/viewfuel',[FuelController::class,'list']);


//purchares
Route::get('/addpurchase',[PurchaseController::class,'index']);
Route::post('/purchase/insert',[PurchaseController::class,'insert']);

