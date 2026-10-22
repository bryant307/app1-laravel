<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\ClienteController;

Route::resource('clientes', ClienteController::class);
Route::get('/', function () {
    return redirect()->route('clientes.index');
});
