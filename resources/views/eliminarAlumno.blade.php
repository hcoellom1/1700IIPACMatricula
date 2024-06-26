<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Alumno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Alumnos</h1>
        <h2>Numero de cuenta: {{$alumnoEliminar->numeroCuenta}}</h2>

        <div class="form-group">
            <label for="name">Nombre:</label>
        </div>
        <input type="text" id="name" name="name" value={{$alumnoEliminar->nombre}} readOnly>
        <div class="form-group">
            <label for="text">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value={{ $alumnoEliminar->apellido}} readOnly>
        </div>
        <div class="form-group">
            <label for="email">Correo:</label>
            <input type="email" id="correo" name="correo" value= {{$alumnoEliminar->correo}} readOnly>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" value={{$alumnoEliminar->telefono}} readOnly>
        </div>

        <div>
            <p>¿Esta seguro de eliminar?</p>
            <a href="{{route('alumno.destroy', $alumnoEliminar->numeroCuenta)}}">Eliminar</a>
        </div>
    </div>
</body>
</html>
