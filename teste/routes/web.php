<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedlynxController;
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

Route::get('/home', function (){
    return view('home');
});

Route::get('/pessoas', [MedlynxController::class, 'viewPessoas']);
//Route::get('/pessoas/{id}', [MedlynxController::class, 'getPessoaById']);

Route::get('/atendimentos', [MedlynxController::class, 'viewAtendimentos']);


Route::get('/itens', [MedlynxController::class, 'viewItens']);

Route::get('/lancamentos', [MedlynxController::class, 'viewLancamentos']);

Route::get('/evolucao', [MedlynxController::class, 'viewEvolucao']);


//Requisitos:
// Requisito 1:
Route::get('/itensmaisconsumidos', [MedlynxController::class, 'viewItensMaisConsumido']);
// Requisito 2:
Route::get('/gerar_relatorio', [MedlynxController::class, 'exibirFormularioRelatorio']);
Route::post('/gerar_relatorio', [MedlynxController::class, 'gerarRelatorio']);
// Requisito 4:
Route::get('/itens', [MedlynxController::class, 'viewItens']);
