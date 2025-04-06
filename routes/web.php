<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\VeiculoController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource("funcionarios", FuncionarioController::class);
Route::resource("cidades", CidadeController::class);
Route::resource("veiculos", VeiculoController::class);