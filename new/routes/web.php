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

Route::resource('/families',familyController::class);
Route::resource('/families',placeController::class);

Route::get('/families', [familyController::class, 'index'])->name('family.index');
Route::get('/families/create', [familyController::class, 'create'])->name('family.create');