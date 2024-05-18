<?php

use App\Http\Controllers\MiembroController;
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

Route::get('/', function () {return view('index');})->middleware('auth');

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/miembros', [MiembroController::class, 'index']);

// Route::get('/miembros', function(){
    // return view('layouts.miembros.index');})->middleware('auth');

Route::get('/miembros/create', function(){
    return view('layouts.miembros.create');})->middleware('auth');
