<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeCliController;
use App\Http\Controllers\HomeAdmController;
use App\Http\Middleware\RoleCliMiddleware;
use App\Http\Middleware\RoleAdmMiddleware;
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


Route::get("/cadastro", [UserController::class, 'create']);
Route::post("/cadastro", [UserController::class, 'store']);

Route::get("/login", [AuthController::class, 'showFormLogin'])->name('login');
Route::post("/login", [AuthController::class, 'login']);

Route::middleware("auth")->group(function (){

    // Route::get('/', function () {
    //     return view('dashboard');
    // });
    
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::post("/logout", [AuthController::class, "logout"]);
    Route::get("/editar", [UserController:: class, 'edit']);
    Route::post("/editar", [UserController::class, 'update']);

    Route::middleware([RoleAdmMiddleware::class])->group(function (){ 
        Route::get('/home-adm', [HomeAdmController::class, 'index']);
        Route::resource("cidades", CidadeController::class);
        Route::resource("plano_contas", PlanoContaController::class);
        Route::resource("cargos", CargoController::class);
        Route::resource("funcionarios", FuncionarioController::class);
        Route::resource("veiculos", VeiculoController::class);
        Route::resource("seguradoras", SeguradoraController::class);
    });

    Route::middleware([RoleCliMiddleware::class])->group(function (){ 
        Route::get('/home-cli', [HomeCliController::class, 'index']);
        Route::resource("clientes", ClienteController::class);
        Route::resource("categorias", CategoriaController::class);
        Route::resource("produtos", ProdutoController::class);
        Route::resource("tipo_manutencaos", TipoManutencaoController::class);
        Route::resource("pecas", PecaController::class);
    });

});