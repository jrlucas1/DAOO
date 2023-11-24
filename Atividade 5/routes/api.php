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
Route::resource('animais', AnimaisController::class);
Route::get('/animais/user/{user}', [AnimaisController::class, 'getAnimaisFromUser'])->name('animais.getAnimaisFromUser');



// Atividades Routes
Route::resource('atividades', AtividadesController::class);
Route::get('/atividades/produto/{produto}', [AtividadesController::class, 'getAtividadesWithProdutos'])->name('atividades.getAtividadesWithProdutos');
Route::get('/atividadesquery', [AtividadesController::class, 'getAtvWithProdAndUser'])->name('atividades.getAtividadesWithProdAndUser');

// Produtos Routes

Route::resource('produtos', ProdutoController::class);

});
?>
