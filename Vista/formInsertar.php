<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar campeon</title>
</head>
<body>
    <h2>Insertar Campeon</h2>
    <br>

    <nav>
        <a href="formVerCampeon.php">  Mostrar Todos  </a>
        <a href="formVerRol.php" >| &nbsp;   Mostrar por Rol  </a>
        <a href="formInsertar.php" >|&nbsp;   Insertar  </a>
        <a href="formBuscar.php">|&nbsp;   Buscar por nombre  </a>
        <a href="formModificar.php">|&nbsp;   Modificar  </a>
    </nav>

    <br>
    <br>

    <form action="../Controlador/controlaInserta.php" method="post">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" require>
        <br>
        <br>
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
        <label for="dificultad">Dificultad</label>
        <select name="dificultad" id="dificultad">
            <option selected disabled value="default">Selecciona una una dificultad</option>
            <option value="Baja">Baja</option>
            <option value="Moderada">Moderada</option>
            <option value="Alta">Alta</option>
        </select>
        <br>
        <br>
        <label for="descripcion">Descripcion</label>
        <textarea type="text" id="descripcion" name="descripcion" rows="4" cols="50" require></textarea>
        <br>
        <br>
        <input type="submit" value="Insertar">

    </form>
    
</body>
</html>