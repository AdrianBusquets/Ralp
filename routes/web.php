<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [PublicController::class, 'index'])->name('home');

Route::get('/city/{city:name}/ads', [PublicController::class, 'adsByCity'])->name('city.ads');

Route::get('/ads/{ad}', [AdController::class, 'show'])->name("ads.show");

Route::post('/ads/store', [AdController::class])->name('ads.store');
