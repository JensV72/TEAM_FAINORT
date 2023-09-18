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
Route::get('homepage', function () {
    return view('homepage');
});
Route::get('players', function () {
    return view('players');
});


Route::get('/', [\App\Http\Controllers\HomepageController::class, 'index']);
