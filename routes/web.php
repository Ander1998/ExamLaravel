<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view('/', 'enunciado');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\LoginController::class, 'login'])->name('admin');

Route::get('/asign_aircraft', [App\Http\Controllers\aircraftController::class, 'asign_aircraft'])->name('asign_aircraft');

Route::get('/pending_fligths', [App\Http\Controllers\aircraftController::class, 'pending_fligths'])->name('pending_fligths');

Route::post('addairplane', [App\Http\Controllers\aircraftController::class, 'addairplane'])->name('addairplane');

Route::post('delete_asignation/{reserve->id}', [App\Http\Controllers\aircraftController::class, 'delete_asignation'])->name('delete_asignation');

Route::post('reserve_flight', [App\Http\Controllers\aircraftController::class, 'reserve_flight'])->name('reserve_flight');

