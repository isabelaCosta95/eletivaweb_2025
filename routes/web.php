<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource("clientes", ClientesController::class);
