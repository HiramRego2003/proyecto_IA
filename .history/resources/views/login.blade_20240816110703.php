<!-- login.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Iniciar Sesión</h2>
    <form action="{{ route('login') }}" method="POST" class="p-5 bg-light rounded">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
        <div class="text-center mt-3">
            <a href="{{ route('register') }}">¿No tienes cuenta? Regístrate aquí</a>
        </div>
    </form>
</div>
@endsection
