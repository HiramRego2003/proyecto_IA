<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrganizationController;



Route::get('/', function(){ return view('index');});

// Ruta para mostrar el formulario de registro de usuarios
Route::get('/register', [UsuariosController::class, 'create'])->name('register');
// Ruta para manejar la lógica de almacenamiento del registro de usuarios
Route::post('/register', [UsuariosController::class, 'store'])->name('usuarios.store');

// Ruta para mostrar el formulario de login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Ruta para manejar la lógica de autenticación
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// Ruta para mostrar el formulario de creación de oportunidades
Route::get('/opportunities/create', [OpportunityController::class, 'create'])->name('opportunities.create');
// Ruta para manejar la lógica de almacenamiento de oportunidades
Route::post('/opportunities', [OpportunityController::class, 'store'])->name('opportunities.store');

// Ruta para mostrar el formulario de envío de feedback
Route::get('/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
// Ruta para manejar la lógica de almacenamiento del feedback
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

// Ruta para mostrar el formulario de creación de organizaciones
Route::get('/organizations/create', [OrganizationController::class, 'create'])->name('organizations.create');
// Ruta para manejar la lógica de almacenamiento de organizaciones
Route::post('/organizations', [OrganizationController::class, 'store'])->name('organizations.store');

