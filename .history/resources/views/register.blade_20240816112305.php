<div class="form-container">
    <h2>Registro de Usuario</h2>
    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">

        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <label for="password">Contraseña:</label>
        <input type="password" name="password">

        <label for="password_confirmation">Confirmar Contraseña:</label>
        <input type="password" name="password_confirmation">

        <label for="ubicacion">Ubicación:</label>
        <input type="text" name="ubicacion" value="{{ old('ubicacion') }}">

        <label for="tipo">Tipo de Usuario:</label>
        <select name="tipo">
            <option value="voluntario" {{ old('tipo') == 'voluntario' ? 'selected' : '' }}>Voluntario</option>
            <option value="organizacion" {{ old('tipo') == 'organizacion' ? 'selected' : '' }}>Organización</option>
        </select>

        <input type="submit" value="Registrar">
    </form>
    <div class="link-container">
        <a href="{{ route('login') }}">¿Ya tienes una cuenta? Inicia sesión aquí</a>
    </div>
</div>
