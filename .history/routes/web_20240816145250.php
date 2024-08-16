<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UsuariosController;

/**
 * Versión del archivo: 1.0.0
 * Fecha de creación: 2024-08-10
 * Fecha de última modificación: 2024-08-14
 * Descripción: Este archivo contiene las rutas de la aplicación Laravel,
 *              incluyendo rutas para el inicio de sesión, registro de usuarios,
 *              y la validación de credenciales de usuario.
 */


Route::get('/', function(){ return view('index');});


Route::name('login')->get('login', [LoginController::class, 'login']);
Route::name('validar')->get('validar', [LoginController::class, 'validar']);

Route::get('/registrar', [UsuariosController::class, 'create'])->name('registrar');
Route::name('registrar_usuarios')->post('registrar_usuarios', [UsuariosController::class, 'registrar_usuarios']);

git remote add origin https://github.com/HiramRego2003/proyecto_IA.git
