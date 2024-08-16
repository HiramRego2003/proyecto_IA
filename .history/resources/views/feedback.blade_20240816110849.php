<!-- feedback.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Enviar Feedback</h2>
    <form action="{{ route('feedback.store') }}" method="POST" class="p-5 bg-light rounded">
        @csrf
        <div class="mb-3">
            <label for="comentario" class="form-label">Comentario</label>
            <textarea class="form-control" id="comentario" name="comentario"></textarea>
        </div>
        <div class="mb-3">
            <label for="calificacion" class="form-label">Calificación</label>
            <select class="form-select" id="calificacion" name="calificacion">
                <option value="1">1 - Muy Malo</option>
                <option value="2">2 - Malo</option>
                <option value="3">3 - Regular</option>
                <option value="4">4 - Bueno</option>
                <option value="5">5 - Excelente</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning w-100">Enviar Feedback</button>
    </form>
</div>
@endsection
