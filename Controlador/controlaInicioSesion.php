<?php
include_once '../Modelo/UsuarioDB.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $usuario = $_POST["usuario"];
    $pwd = $_POST["pwd"];

    $resultadoInicioSesion = UsuarioDB::InicioSesion($usuario, $pwd);

    if ($resultadoInicioSesion && password_verify($pwd,$resultadoInicioSesion['pwd'])) {
        echo "USUARIO CORRECTAMENTE LOGUEADO";

        // Mostrar un botón para redirigir a otra página
        echo '<form action="../Vista/formIndex.php" method="get">';
        echo '<br>';
        echo '<input type="submit" value="Pulse aquí para ir al juego">';
        echo '</form>';

    } else {
        echo "El usuario introducido no existe en la BBDD";
    }

}
?>