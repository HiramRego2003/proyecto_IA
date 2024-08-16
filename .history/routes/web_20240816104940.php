<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo grandioso!
|
*/

// Rutas de registro de usuarios
Route::get('/register', [UsuariosController::class, 'create'])->name('register');
Route::post('/register', [UsuariosController::class, 'store'])->name('usuarios.store');

// Rutas de login de usuarios
Route::get('/login', [UsuariosController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UsuariosController::class, 'login'])->name('usuarios.login');

