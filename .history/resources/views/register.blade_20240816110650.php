<!-- register.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Registro de Usuario</h2>
    <form action="{{ route('register') }}" method="POST" class="p-5 bg-light rounded">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion">
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo de Usuario</label>
            <select class="form-select" id="tipo" name="tipo">
                <option value="voluntario">Voluntario</option>
                <option value="organizacion">Organización</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Registrar</button>
    </form>
</div>
@endsection
