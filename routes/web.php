<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CidadeController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource("funcionarios", FuncionarioController::class);
Route::resource("cidades", CidadeController::class);