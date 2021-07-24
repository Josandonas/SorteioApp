<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'index']);

Route::post('/sortNumero', [PrincipalController::class,'sorteioNumero']);

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index']);
