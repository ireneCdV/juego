<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver</title>
</head>
<body>
    <h2>Mostrar todos los campeones</h2>
    
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

    <form action="../Controlador/controlaMostrar.php" method="post">
        
        <input type="submit" value="Mostrar Datos">
    </form>
    
</body>
</html>