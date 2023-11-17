<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AnimaisController;
use App\Http\Controllers\API\AtividadesController;
use App\Http\Controllers\API\ProdutoController;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::middleware('auth:sanctum')->group(function(){

// Animais Routes
Route::get('/animais', [AnimaisController::class, 'index'])->name('animais.index');
Route::get('/animais/{animal}', [AnimaisController::class, 'show'])->name('animais.show');
Route::post('/animais/store', [AnimaisController::class, 'store'])->name('animais.store');
Route::put('/animais/{animal}', [AnimaisController::class, 'update'])->name('animais.update');
Route::delete('/animais/{animal}', [AnimaisController::class, 'delete'])->name('animais.delete');
Route::get('/animais/user/{user}', [AnimaisController::class, 'getAnimaisFromUser'])->name('animais.getAnimaisFromUser');




// Atividades Routes
Route::get('/atividades', [AtividadesController::class, 'index'])->name('atividades.index');
Route::get('/atividades/{atividade}', [AtividadesController::class, 'show'])->name('atividades.show');
Route::post('/atividades/store', [AtividadesController::class, 'store'])->name('atividades.store');
Route::put('/atividades/{atividade}', [AtividadesController::class, 'update'])->name('atividades.update');
Route::delete('/atividades/{atividade}', [AtividadesController::class, 'delete'])->name('atividades.delete');

// Produtos Routes

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{produto}', [ProdutoController::class, 'show'])->name('produtos.show');
Route::post('/produtos/store', [ProdutoController::class, 'store'])->name('produtos.store');
Route::put('/produtos/{produto}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/{produto}', [ProdutoController::class, 'delete'])->name('produtos.delete');

});
?>
