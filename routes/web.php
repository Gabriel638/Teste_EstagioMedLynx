<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedlynxController;


Route::get('/home', function (){
    return view('home');
});

Route::get('/pessoas', [MedlynxController::class, 'viewPessoas']);

Route::get('/atendimentos', [MedlynxController::class, 'viewAtendimentos']);


Route::get('/itens', [MedlynxController::class, 'viewItens']);

Route::get('/lancamentos', [MedlynxController::class, 'viewLancamentos']);

Route::get('/evolucao', [MedlynxController::class, 'viewEvolucao']);


//Requisitos:
// Requisito 1:
Route::get('/itensmaisconsumidos', [MedlynxController::class, 'viewItensMaisConsumido']);
// Requisito 4:
Route::get('/itens', [MedlynxController::class, 'viewItens']);

