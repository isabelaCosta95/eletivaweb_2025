<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

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
Route::resource("tipos_manutencao", TipoManutencaoController::class);
Route::resource("planos_conta", PlanoContaController::class);
Route::resource("pecas", PecaController::class);
Route::resource("seguradoras", SeguradoraController::class);
Route::resource("cargos", CargoController::class);