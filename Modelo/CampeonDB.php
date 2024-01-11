<?php

include_once 'Campeon.php';

    class CampeonDB{

        public static function add(Campeon $c):bool{
            //Establecemos conexion con la BBDD
            include_once '../Conexion/conexion.php';
            $conexion = Conexion::obtenerConexion();

            //Preparar la consultaSQL
            $sql = "INSERT INTO campeon (nombre,rol,dificultad,descripcion) VALUES (:nombre, :rol, :dificultad, :descripcion)";
            $sentencia = $conexion ->prepare($sql);

            $sentencia ->bindValue(":nombre",$c->getNombre());
            $sentencia ->bindValue(":rol",$c->getRol());
            $sentencia ->bindValue(":dificultad",$c->getDificultad());
            $sentencia ->bindValue(":descripcion",$c->getDescripcion());

            return $sentencia->execute();

        
        }

        public static function getAll(){
            //Establecemos conexion con la BBDD
            include_once '../Conexion/conexion.php';
            $conexion = Conexion::obtenerConexion();

            //Preparar la consultaSQL
            $sql = "SELECT * FROM campeon ";
            $sentencia = $conexion ->prepare($sql);

            //paso 3: viculamos los parametros de la consulta preparada con los valores de las variables correspondientes.
            $sentencia ->setFetchMode(PDO::FETCH_CLASS,"Campeon");    
            $sentencia->execute();

            return $sentencia->fetchAll();

        
        }


        public static function getAllRol(){
            // Establecemos conexión con la BBDD
            include_once '../Conexion/conexion.php';
            $conexion = Conexion::obtenerConexion();
        
            // Obtener el valor del rol desde el formulario (suponiendo que se envía mediante POST)
            $nombreRol = isset($_POST['rol']) ? $_POST['rol'] : null;
        
            // Preparar la consulta SQL
            $sql = "SELECT * FROM campeon WHERE rol = :nombreRol";
            $sentencia = $conexion->prepare($sql);
            $sentencia->bindParam(':nombreRol', $nombreRol, PDO::PARAM_STR);
        
            // Vinculamos los parámetros de la consulta preparada con los valores de las variables correspondientes.
            $sentencia->setFetchMode(PDO::FETCH_CLASS, "Campeon");    
            $sentencia->execute();
        
            return $sentencia->fetchAll();
        }
        
        

    }

?>