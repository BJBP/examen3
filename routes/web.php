<?php

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

$servicios = [
    ['titulo' => 'Servicio 01'],
    ['titulo' => 'Servicio 02'],
    ['titulo' => 'Servicio 03'],
    ['titulo' => 'Servicio 04'],
    ['titulo' => 'Servicio 05'],
];

Route::view('/', 'home')->name('home');
Route::get('/home','App\Http\Controllers\ClientesController@index')->name('home');

Route::resource('clientes', 'App\Http\Controllers\ClientesController')->names('clientes')->middleware('auth');


Route::view('servicios', 'servicios')->name('servicios');
Route::view('proyectos', 'proyectos')->name('proyectos');
Route::view('blog', 'blog')->name('blog');
Route::view('contacto', 'contacto')->name('contacto');

Auth::routes();
Auth::routes(['register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
