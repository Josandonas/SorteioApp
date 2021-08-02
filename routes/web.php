<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'index']);

Route::get('/fale',[PrincipalController::class. 'fale']);

Route::post('/sortNumero', [PrincipalController::class,'sorteioNumero']);

Route::post('/sortNome', [PrincipalController::class,'sorteioNome']);

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index']);
