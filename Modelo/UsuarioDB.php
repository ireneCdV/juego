<?php
    include_once 'Usuario.php';
    class UsuarioDB{

        public static function Registro($nombre, $usuario, $pwd, $email){
            // Establecemos conexión con la BBDD
            include_once '../Conexion/conexion.php';
            $conexion = Conexion::obtenerConexion();
            
            $sql = "INSERT INTO usuarios(nombre, usuario, pwd, email) VALUES(:nombre, :usuario, :pwd, :email)";
            $sentencia = $conexion->prepare($sql);
            $result = $sentencia->execute([
                "nombre" =>$nombre,
                "usuario" => $usuario,
                "pwd" => password_hash($pwd, PASSWORD_DEFAULT),
                "email" => $email
            ]);

            return $result; // Devuelve true si la operación fue exitosa, false si falló
        }

        public static function InicioSesion($usuario){
            // Establecemos conexión con la BBDD
            include_once '../Conexion/conexion.php';
            $conexion = Conexion::obtenerConexion();
        
            $sql = "SELECT * FROM usuarios WHERE usuario = ?";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute([$usuario]);
        
            $usuarioBD = $sentencia->fetch(); // Fila de la base de datos leída.
            
            return $usuarioBD; // Devuelve la fila del usuario o false si no se encontró
        }
        
    }
?>