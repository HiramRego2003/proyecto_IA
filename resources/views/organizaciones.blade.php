<!-- create_organization.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Registrar Organización</h2>
    <form action="{{ route('organizations.store') }}" method="POST" class="p-5 bg-light rounded">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre de la Organización</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="contact_email" class="form-label">Correo de Contacto</label>
            <input type="email" class="form-control" id="contact_email" name="contact_email">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-info w-100">Registrar Organización</button>
    </form>
</div>
@endsection
