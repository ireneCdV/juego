<?php
include_once '../Modelo/UsuarioDB.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $usuario = $_POST["usuario"];
    $pwd = $_POST["pwd"];

    $resultadoInicioSesion = UsuarioDB::InicioSesion($usuario, $pwd);

    if ($resultadoInicioSesion && password_verify($pwd,$resultadoInicioSesion['pwd'])) {
        echo "Sesión iniciada correctamente";
        // Redirige a la página de inicio de sesión
        header("Location: ../Vista/formIndex.php");
        exit();
    } else {
        echo "Fallo al iniciar sesión";
    }

    
}
?>