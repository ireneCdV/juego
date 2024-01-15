<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Campeón</title>
</head>
<body>

    <h2>Modificar Campeón</h2>
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

<!-- Ejemplo de formulario -->
<form method="post" action="../Controlador/controlaModificar.php">
    <label for="nombre">Nombre original:</label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre original" required>
    <br>
    <br>
    <label for="nuevoNombre">Nuevo Nombre:</label>
    <input type="text" name="nuevoNombre" id="nuevoNombre" placeholder="Nuevo Nombre" required>
    <br>
    <br>
    <label for="nuevoRol">Nuevo Rol:</label>
    <input type="text" name="nuevoRol" id="nuevoRol" placeholder="Nuevo Rol" required>
    <br>
    <br>
    <label for="nuevaDificultad">Nueva Dificultad:</label>
    <input type="text" name="nuevaDificultad" id="nuevaDificultad" placeholder="Nueva Dificultad" required>
    <br>
    <br>
    <label for="nuevaDescripcion">Nueva Descripción:</label>
    <input type="text" name="nuevaDescripcion" id="nuevaDescripcion" placeholder="Nueva Descripción" required>
    <br>
    <br>
    <input type="submit" value="Modificar">
</form>

</body>
</html>
