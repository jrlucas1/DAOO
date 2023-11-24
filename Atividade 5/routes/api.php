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

Route::resource('produtos', ProdutoController::class);

});


Route::middleware(['auth:sanctum', 'role:admin'])->group(function(){

    Route::post('/animais', [AnimaisController::class, 'store'])->name('animais.store');
    Route::put('/animais/{animal}', [AnimaisController::class, 'update'])->name('animais.update');
    Route::delete('/animais/{animal}', [AnimaisController::class, 'delete'])->name('animais.delete');
    
    
    Route::post('/atividades', [AtividadesController::class, 'store'])->name('atividades.store');
    Route::put('/atividades/{atividade}', [AtividadesController::class, 'update'])->name('atividades.update');
    Route::delete('/atividades/{atividade}', [AtividadesController::class, 'delete'])->name('atividades.delete');
    
    
});

?>
