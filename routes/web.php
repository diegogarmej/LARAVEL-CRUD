<?php

use App\Http\Controllers\PersonaController;
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
//Route::get('/', function () {
//    return view('inicio');
//});



Route::get('/', [PersonaController::class, 'index'])->name('persona.index');
Route::get('/create', [PersonaController::class, 'create'])->name('persona.create');
Route::post('/store', [PersonaController::class, 'store'])->name('persona.store');
Route::get('/edit', [PersonaController::class, 'edit'])->name('persona.edit');
Route::get('/show', [PersonaController::class, 'show'])->name('persona.show');