<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'index']);

Route::get('/fale',[faleConoscoController::class, 'faleConosco']);

Route::post('/sortNumero', [PrincipalController::class,'sorteioNumero']);

Route::post('/sortNome', [PrincipalController::class,'sorteioNome']);

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index']);
