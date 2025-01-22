<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TvController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/discover/tv', [TvController::class, 'allchannels']);

Route::get('/tv2', [TvController::class, 'tv2'])->name('tv2');
Route::get('/tv2stream', [TvController::class, 'tv2Stream'])->name('tv2stream');


Route::get('/proxy', [TvController::class, 'yupp'])->name('yupp');
Route::get('/tv/regional-channels', [TvController::class, 'regionalChannels'])->name('regionalChannels');
Route::get('/tv/sports-channels', [TvController::class, 'sportsChannels'])->name('sportsChannels');
