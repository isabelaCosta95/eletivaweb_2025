<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ProdutoController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource("funcionarios", FuncionarioController::class);
Route::resource("cidades", CidadeController::class);
Route::resource("veiculos", VeiculoController::class);
Route::resource("produtos", ProdutoController::class);