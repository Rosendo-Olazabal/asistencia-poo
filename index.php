<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar nuevo alumno</title>
</head>
<body>
    <h1>REGISTRAR NUEVO ALUMNO</h1>
    <form action="clases/Alumno.php" method="post">
        <label for="dni">
            DNI:
            <input type="number" id="dni" name="dni">
        </label>
        <br><br>
        <label for="nombre">
            NOMBRE:
            <input type="text" id="nombre" name="nombre">
        </label>
        <br><br>
        <label for="apellidos">
            APELLIDOS:
            <input type="text" id="apellidos" name="apellidos">
        </label>
        <br><br>
        <label for="genero">
            MASCULINO:
            <input type="radio" name="genero" id="genero" value="masculino">
        </label>
        <label for="genero">
            FEMENINO:
            <input type="radio" name="genero" id="genero" value="femenino">
        </label>
        <br><br>
        <input type="submit" value="Registrar Alumno">
        <a type="button" href="asistencia.php">Registrar Asistencia</a>
    </form>
</body>
</html>