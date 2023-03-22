<?php

use Illuminate\Support\Facades\Route;

use Symfony\Component\HttpFoundation\Request;

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


Route::get('/', [App\Http\Controllers\PortfolioController::class, 'index']);

Auth::routes();


Route::resource('/proyectos',App\Http\Controllers\ProyectoController::class );
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get( '/contacto', [ App\Http\Controllers\ContactController::class, 'index' ])->name(name:"contacto.index");
Route::post('/contacto', [ App\Http\Controllers\ContactController::class, 'send' ])->name(name:"contacto.send");
 
Route::get("/mailable/contacto", function()
{
    return  new \App\Mail\SendContactForm(name:"nombre", email:"email", subject:"motivo", message:"mensaje");
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login','APIAuthController@login');
Route::post('register','APIAuthController@register');

Route::group(['middleware' => 'auth:member-api'], function(){
  Route::post('user', 'APIAuthController@details');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
