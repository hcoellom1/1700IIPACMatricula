<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Alumnos</h1>
        
        <!-- Tabla para mostrar registros -->
        <table>
            <thead>
                <tr>
                    <th>Numero Cuenta</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->numeroCuenta }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->apellido }}</td>
                        <td>{{ $alumno->correo }}</td>
                        <td>
                            <a href={{route('alumno.editar', $alumno->numeroCuenta)}}>editar</a>
                        </td>
                        <td>
                            <a href={{route('alumno.eliminar', $alumno->numeroCuenta)}}>eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
