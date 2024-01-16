<?php
    include_once '../Modelo/UsuarioDB.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $usuario = $_POST["usuario"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];
    
        $resultadoRegistro = UsuarioDB::Registro($nombre, $usuario, $pwd, $email);
    
        if ($resultadoRegistro) {
            // El registro fue exitoso
            echo "Registro exitoso. Puedes iniciar sesión ahora.";
            // Redirige a la página de inicio de sesión
            header("Location: ../Vista/formIniciarSesion.php");
            exit();
        } else {
            // Error en el registro
            echo "Error al registrar el usuario. Por favor, intenta nuevamente.";
        }
    }

?>