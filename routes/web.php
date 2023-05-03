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
//Rutas Absolutas
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/LogIn', function (){
        return view('logIn');
    });

//Rutas de Administrador
    Route::get('/inicio', function () {
        return view('admin.inicio');
    });  
//Rutas de Usuarios

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
