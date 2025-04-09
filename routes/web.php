<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TipoManutencaoController;
use App\Http\Controllers\PlanoContaController;
use App\Http\Controllers\PecaController;
use App\Http\Controllers\SeguradoraController;
use App\Http\Controllers\CargoController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource("funcionarios", FuncionarioController::class);
Route::resource("cidades", CidadeController::class);
Route::resource("veiculos", VeiculoController::class);
Route::resource("categorias", CategoriaController::class);
Route::resource("produtos", ProdutoController::class);
Route::resource("clientes", ClienteController::class);
Route::resource("tipo_manutencaos", TipoManutencaoController::class);
Route::resource("planos_conta", PlanoContaController::class);
Route::resource("pecas", PecaController::class);
Route::resource("seguradoras", SeguradoraController::class);
Route::resource("cargos", CargoController::class);