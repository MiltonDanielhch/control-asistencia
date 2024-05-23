<?php

use App\Http\Controllers\MiembroController;
use App\Http\Controllers\MinisterioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\UserController;

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

Route::get('/', [AdminController::class, 'index'])->middleware('auth');
Route::get('/asistencias/reportes', [AsistenciaController::class, 'reportes']);
Route::get('/asistencias/pdf', [AsistenciaController::class, 'pdf']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register'=>true]);


Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');


Route::resource('/miembros', MiembroController::class);

Route::resource('/ministerios', MinisterioController::class);

Route::resource('/usuarios', UserController::class);

Route::resource('/asistencias', AsistenciaController::class);

// Route::get('/miembros', [MiembroController::class, 'index']);

// Route::get('/miembros', function(){
    // return view('layouts.miembros.index');})->middleware('auth');

// Route::get('/miembros/create', function(){
//     return view('layouts.miembros.create');})->middleware('auth');
