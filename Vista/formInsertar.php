<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar campeon</title>
</head>
<body>
    <h2>Insertar Campeon</h2>
    <form action="../Controlador/controlaInserta.php" method="post">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" require>
        <br>
        <br>
        <label for="rol">Rol</label>
        <input type="text" id="rol" name="rol" require>
        <br>
        <br>
        <label for="dificultad">Dificultad</label>
        <input type="text" id="dificultad" name="dificultad" require>
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