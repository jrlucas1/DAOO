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

//Produtos read
Route::get('produtos', [ProdutoController::class, 'index']);
Route::get('produto/{id}', [ProdutoController::class, 'single'])->name('singleProd');

//Produtos create
Route::get('produto', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('produto', [ProdutoController::class, 'store'])->name('produtos.store');

//Produtos update
Route::get('produtos/{id}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::post('produtos/{id}/update', [ProdutoController::class, 'update'])->name('produtos.update');

//Produtos delete
Route::get('produtos/{id}/delete', [ProdutoController::class, 'delete'])->name('produtos.delete');
Route::post('produtos/{id}/remove', [ProdutoController::class, 'remove'])->name('produtos.remove');


// Animais read
Route::get('/animais', [AnimaisController::class, 'index'])->name('animais.index');
Route::get('/animal/{id}', [AnimaisController::class, 'single'])->name('singleAnm');

// Animais create
Route::get('/animal', [AnimaisController::class, 'create'])->name('animais.create');
Route::post('/animal', [AnimaisController::class, 'store'])->name('store');

//Animais update
Route::get('/animais/{id}/edit', [AnimaisController::class, 'edit'])->name('animais.edit');
Route::post('/animais/{id}/update', [AnimaisController::class, 'update'])->name('animais.update');

//Animais delete

Route::get('/animais/{id}/delete', [AnimaisController::class, 'delete'])->name('animais.delete');
Route::post('/animais/{id}/remove', [AnimaisController::class, 'remove'])->name('animais.remove');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UsersController::class, 'single'])->name('singleUser');


//Atividades Create
Route::get('/atividade', [AtividadesController::class, 'create'])->name('atividade.create');
Route::post('/atividade', [AtividadesController::class, 'store'])->name('store');
//Atividades Update
Route::get('/atividade/{id}/edit', [AtividadesController::class, 'edit'])->name('edit');
Route::post('/atividade/{id}/update', [AtividadesController::class, 'update'])->name('atividade.update');
//Atividades Delete
Route::get('/atividade/{id}/delete', [AtividadesController::class, 'delete'])->name('atividades.delete');
Route::post('/atividade/{id}/remove', [AtividadesController::class, 'remove'])->name('atividades.remove');

//Atividades Read
Route::get('/atividades', [AtividadesController::class, 'index'])->name('atividades.index');
Route::get('/atividades/{id}', [AtividadesController::class, 'single'])->name('singleAtv');
Route::get('/atividades/search', [AtividadesController::class, 'search'])->name('atividades.search');



