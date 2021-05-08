<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PismoController;

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

//main

Route::get('/', function () {
    return view('dashboard.index');
});

//settings

Route::get('/settings', function () {
    return view('settings.index');
})->name("settings"); 

//pismo
Route::get('/pismo', [PismoController::class,'index'] )->name("pismo"); 

//novopismo
Route::get('/pismo-create', [PismoController::class,'create'])->name("pismo.create"); 

//save
Route::post('/pismo-store', [PismoController::class,'store'])->name("pismo.store");

//edit
Route::get('/pismo-edit/{id}', [PismoController::class,'edit'])->name("pismo.edit"); 

//update
Route::post('/pismo-update/{id}', [PismoController::class,'update'])->name("pismo.update");

//delete
Route::get('/pismo-delete/{id}', [PismoController::class,'delete'])->name("pismo.delete");