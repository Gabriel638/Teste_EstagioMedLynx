<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedlynxController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/Pessoas', [MedlynxController::class, 'APIPessoas']);


Route::post('/create-atendimento', [MedlynxController::class, 'createAtendimento']);
Route::post('/create-evolucao', [MedlynxController::class, 'createEvolucao']);
