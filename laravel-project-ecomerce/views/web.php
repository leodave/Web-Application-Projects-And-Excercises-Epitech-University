<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CreatorController;
use App\Models\Adds;

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



Route::get('/prueba', function () {

    return view('prueba');
});

Route::get('/search',[SearchController::class, 'search'])->name('web.search');

Route::get('/createad', [ CreatorController::class, 'createad'])->name('web.creator');
Route::post('/storead', [ CreatorController::class, 'storead'])->name('web.store');

Route::get('/football', [ CreatorController::class, 'football'])->name('web.football');
Route::get('/basketball', [ CreatorController::class, 'basketball'])->name('web.basketball');
Route::get('/cycling', [ CreatorController::class, 'cycling'])->name('web.cycling');
Route::get('/boxing', [ CreatorController::class, 'boxing'])->name('web.boxing');
