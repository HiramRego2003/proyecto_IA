<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UsuariosController;




Route::get('/', function(){ return view('index');});


Route::name('login')->get('login', [LoginController::class, 'login']);
Route::name('validar')->get('validar', [LoginController::class, 'validar']);

Route::get('/registrar', [UsuariosController::class, 'create'])->name('registrar');
Route::name('registrar_usuarios')->post('registrar_usuarios', [UsuariosController::class, 'registrar_usuarios']);