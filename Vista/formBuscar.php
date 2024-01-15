<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar campeon por nombre</title>
</head>
<body>
    <h2>Buscar campeon</h2>
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

    <form action="../Controlador/controlaBuscar.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <input type="submit" value="Buscar">
    </form>


    
</body>
</html>
