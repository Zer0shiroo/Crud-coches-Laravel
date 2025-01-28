<?php

use App\Http\Controllers\CochesController;
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

Route::get('/', function () {

    
});
Route::get('/miscoches', [CochesController::class , 'index'])->name('listacoches');;
Route::get('/coches/{id}',[CochesController::class, 'show'])->name('mostrarcoche');
Route::get('/crearcoche',[CochesController::class, 'create'])->name('creacion');
Route::post('/guardarcoche',[CochesController::class, 'store'])->name('guardarcoche');
Route::get('/eliminarcoche/{id}',[CochesController::class, 'destroy'])->name('eliminarcoche');
Route::get('/coches/{id}/edit', [CochesController::class, 'edit'])->name('editarcoche');
Route::put('/coches/{id}', [CochesController::class, 'update'])->name('actualizarcoche');