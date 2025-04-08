<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanoContaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("plano_contas", PlanoContaController::class);
