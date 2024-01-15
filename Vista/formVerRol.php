<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Selección de Rol</title>
</head>
<body>
    <h2>Mostar campeones Filtrando por ROL</h2>

    <nav>
        <a href="formVerCampeon.php">  Mostrar Todos  </a>
        <a href="formVerRol.php" >| &nbsp;   Mostrar por Rol  </a>
        <a href="formInsertar.php" >|&nbsp;   Insertar  </a>
        <a href="formBuscar.php">|&nbsp;   Buscar por nombre  </a>
        <a href="formModificar.php">|&nbsp;   Modificar  </a>
    </nav>

    <br>
    <br>
    
    <form action="../Controlador/controlaMostrarRol.php" method="post">
        <label for="rol">Selecciona un Rol:</label>
        <select name="rol" id="rol">
            <option selected disabled value="default">Selecciona un rol</option>
            <option value="Luchador">Luchador</option>
            <option value="Tirador">Tirador</option>
            <option value="Apoyo">Apoyo</option>
            <option value="Mago">Mago</option>
            <option value="Asesino">Asesino</option>
            <option value="Tanque">Tanque</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Mostrar">
    </form>
</body>
</html>