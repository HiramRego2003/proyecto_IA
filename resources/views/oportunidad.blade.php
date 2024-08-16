<!-- create_opportunity.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Crear Oportunidad</h2>
    <form action="{{ route('opportunities.store') }}" method="POST" class="p-5 bg-light rounded">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título de la Oportunidad</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
        </div>
        <div class="mb-3">
            <label for="requisitos" class="form-label">Requisitos</label>
            <textarea class="form-control" id="requisitos" name="requisitos"></textarea>
        </div>
        <div class="mb-3">
            <label for="duracion" class="form-label">Duración</label>
            <input type="text" class="form-control" id="duracion" name="duracion">
        </div>
        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion">
        </div>
        <button type="submit" class="btn btn-success w-100">Crear Oportunidad</button>
    </form>
</div>
@endsection
