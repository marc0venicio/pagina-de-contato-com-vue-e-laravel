<?php

use App\Http\Controllers\EsociaController;
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
    return view('welcome');
});

Auth::routes();

Route::post('esocia', [EsociaController::class, 'store'])->name('esocia');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::apiResource('/esocia', EsociaController::class);