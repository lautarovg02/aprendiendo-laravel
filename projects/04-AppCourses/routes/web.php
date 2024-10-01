<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!s
|
*/

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);
//*View():We will only use this method when we want to display static content.
Route::view('nosotros', 'nosotros')->name('nosotros');