<!DOCTYPE html>
<html>
<head><title>Editar Cliente</title></head>
<body style="font-family: Arial; margin: 40px;">
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf @method('PUT')
        <p>Nombre: <input type="text" name="nombre" value="{{ $cliente->nombre }}" required></p>
        <p>Correo: <input type="email" name="correo" value="{{ $cliente->correo }}" required></p>
        <p>Teléfono: <input type="text" name="telefono" value="{{ $cliente->telefono }}"></p>
        <button type="submit">Actualizar</button>
        <a href="{{ route('clientes.index') }}">Cancelar</a>
    </form>
</body>
</html>

