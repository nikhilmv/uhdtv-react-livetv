<?php

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


Route::get('/tv', [AdminController::class, 'tv'])->name('tv');  
Route::get('/proxy', [AdminController::class, 'proxy'])->name('proxy');
Route::get('/manifest', [AdminController::class, 'manifest'])->name('manifest');
Route::get('/manifest/{hash}/{channel}/{id}/{segment}', [AdminController::class, 'handleManifest'])  ;
