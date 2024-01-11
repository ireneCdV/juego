<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Selección de Rol</title>
</head>
<body>
    <form action="../Controlador/controlaMostrarRol.php" method="post">
        <label for="rol">Selecciona un Rol:</label>
        <select name="rol" id="rol">
            <option value="Luchador">Luchador</option>
            <option value="Tirador">Tirador</option>
            <option value="Apoyo">Apoyo</option>
            <option value="Mago">Mago</option>
            <option value="Asesino">Asesino</option>
            <option value="Tanque">Tanque</option>

        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>