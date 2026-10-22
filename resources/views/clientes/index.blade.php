<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        .btn { padding: 6px 12px; text-decoration: none; border-radius: 4px; color: white; margin-right: 4px; }
        .btn-add { background: #2563eb; }
        .btn-edit { background: #f59e0b; }
        .btn-del { background: #dc2626; border: none; cursor: pointer; }
        .success { color: green; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Gestión de Clientes</h1>
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    <a href="{{ route('clientes.create') }}" class="btn btn-add">+ Nuevo Cliente</a>
    <br><br>
    <table>
        <tr><th>Nombre</th><th>Correo</th><th>Teléfono</th><th>Acciones</th></tr>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->correo }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-edit">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-del" onclick="return confirm('¿Eliminar este cliente?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
