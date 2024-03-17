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

/*
Route::get('/', function () {
    return view('welcome');
});

*/


// Equivalente al de arriba
// Route::view('/', 'welcome');

// Para dar nombre de la ruta 
// Route::view('/', 'welcome')->name('welcome');

// Para el ejercicio de hello world!
Route::view('/helloWorld', 'helloWorld');

// **IMPORTANTE** 
// En laravel para moverse entre rutas no se usa /, si no que se usa . 
// Ejemplo: app.Http.Controllers en lugar de app/Http/Controllers

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');