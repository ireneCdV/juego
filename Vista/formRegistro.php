<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="../Controlador/controlaRegistro.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" required>
        <br>
        <br>
        <label for="email">Email: </label>
        <input type="text" name="email" required>
        <br>
        <br>    
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" required>
        <br>
        <br>
        <label for="">Contraseña: </label>
        <input type="password" name="pwd" required>
        <br>
        <br>
        <input type="submit"value="Registrar">

    </form>
    
</body>
</html>