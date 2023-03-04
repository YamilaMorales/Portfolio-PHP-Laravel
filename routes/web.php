<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

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



Route::get('upload-image', [ ImageUploadController::class, 'index' ]);
Route::post('upload-image', [ ImageUploadController::class, 'store' ])->name('image.store');
Route::get('/', [App\Http\Controllers\PortfolioController::class, 'index']);

Auth::routes();


Route::resource('/proyectos',App\Http\Controllers\ProyectoController::class );
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

