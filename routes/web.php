<?php

use App\Http\Controllers\Exercise1Ctrl;
use App\Http\Controllers\Exercise2Ctrl;
use App\Http\Controllers\Exercise3Ctrl;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('menu');

Route::get('/exercise-1', [Exercise1Ctrl::class, 'index'])->name('exercise.1.index');
Route::post('/exercise-1/calculate', [Exercise1Ctrl::class, 'calculate'])->name('exercise.1.calculate');

Route::get('/exercise-2', [Exercise2Ctrl::class, 'index'])->name('exercise.2.index');
Route::post('/exercise-2/calculate', [Exercise2Ctrl::class, 'calculate'])->name('exercise.2.calculate');

Route::get('/exercise-3', [Exercise3Ctrl::class, 'index'])->name('exercise.3.index');
