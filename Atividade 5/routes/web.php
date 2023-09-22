<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\AtividadesController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsersController;
use App\Models\Atividades;
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
    return view('welcome');
});

// Animais read
Route::get('/animais', [AnimaisController::class, 'index']);
Route::get('/animal/{id}', [AnimaisController::class, 'single'])->name('singleAnm');

// Animais create
Route::get('/animal', [AnimaisController::class, 'create'])->name('create');
Route::post('/animal', [AnimaisController::class, 'store'])->name('store');

//Animais update
Route::get('/animais/{id}/edit', [AnimaisController::class, 'edit'])->name('edit');
Route::post('/animais/{id}/update', [AnimaisController::class, 'update'])->name('animais.update');

//Animais delete

Route::get('/animais/{id}/delete', [AnimaisController::class, 'delete'])->name('delete');
Route::post('/animais/{id}/remove', [AnimaisController::class, 'remove'])->name('animais.remove');

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/{id}', [UsersController::class, 'single'])->name('singleUser');


//Atividades Create
Route::get('/atividade', [AtividadesController::class, 'create']);
Route::post('/atividade', [AtividadesController::class, 'store']);
//Atividades Update
Route::get('/atividade/{id}/edit', [ProdutoController::class, 'edit'])->name('edit');
Route::post('/atividade/{id}/update', [ProdutoController::class, 'update'])->name('update');
//Atividades Delete
Route::get('/atividade/{id}/delete', [Atividades::class, 'delete'])->name('delete');
Route::post('/atividade/{id}/remove', [Atividades::class, 'remove'])->name('atividades.remove');

//Atividades Read
Route::get('/atividades', [AtividadesController::class, 'index']);
Route::get('/atividades/{id}', [AtividadesController::class, 'single'])->name('singleAtv');



