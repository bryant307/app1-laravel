<!DOCTYPE html>
<html>
<head><title>Nuevo Cliente</title></head>
<body style="font-family: Arial; margin: 40px;">
    <h1>Nuevo Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <p>Nombre: <input type="text" name="nombre" required></p>
        <p>Correo: <input type="email" name="correo" required></p>
        <p>Teléfono: <input type="text" name="telefono"></p>
        <button type="submit">Guardar</button>
        <a href="{{ route('clientes.index') }}">Cancelar</a>
    </form>
</body>
</html>
