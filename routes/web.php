<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("cargos", CargoController::class);
