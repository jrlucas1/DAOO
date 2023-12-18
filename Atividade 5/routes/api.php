<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AnimaisController;
use App\Http\Controllers\API\AtividadesController;
use App\Http\Controllers\API\ProdutoController;
use App\Http\Controllers\API\UserController;

// User Routes
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');




Route::middleware('auth:sanctum')->group(function(){

// Animais Routes
Route::apiResource('animais', AnimaisController::class);
Route::get('/animais/user/{user}', [AnimaisController::class, 'getAnimaisFromUser'])->name('animais.getAnimaisFromUser');



// Atividades Routes
Route::apiResource('atividades', AtividadesController::class);
Route::get('/atividades/user/{user}', [AtividadesController::class, 'getAtividadesFromUser'])->name('atividades.getAtividadesFromUser');
Route::get('/atividades/produto/{produto}', [AtividadesController::class, 'getAtividadesWithProdutos'])->name('atividades.getAtividadesWithProdutos');
Route::get('/atividadesquery', [AtividadesController::class, 'getAtvWithProdAndUser'])->name('atividades.getAtividadesWithProdAndUser');

// Produtos Routes

Route::apiResource('produtos', ProdutoController::class);
Route::get('/produtos/user/{user}', [ProdutoController::class, 'getProdutosFromUser'])->name('produtos.getProdutosFromUser');
Route::get('/produtos/atividade/{atividade}', [ProdutoController::class, 'getProdutosFromAtividade'])->name('produtos.getProdutosFromAtividade');

});

Route::middleware(['auth:sanctum', 'can:manage-animais'])->group(function(){
    Route::post('/animais', [AnimaisController::class, 'store'])->name('animais.store');
    Route::put('/animais/{id}', [AnimaisController::class, 'update'])->name('animais.update');
    Route::delete('/animais/{id}', [AnimaisController::class, 'destroy'])->name('animais.destroy');
});

Route::middleware(['auth:sanctum', 'can:manage-atividades'])->group(function(){
    Route::post('/atividades', [AtividadesController::class, 'store'])->name('atividades.store');
    Route::put('/atividades/{id}', [AtividadesController::class, 'update'])->name('atividades.update');
    Route::delete('/atividades/{id}', [AtividadesController::class, 'destroy'])->name('atividades.destroy');
});

Route::middleware(['auth:sanctum', 'can:manage-produtos'])->group(function(){
    Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
    Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
});

?>
