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

        public static function buscarCampeon(){
            // Establecemos conexión con la BBDD
            include_once '../Conexion/conexion.php';
            $conexion = Conexion::obtenerConexion();
        
            // Obtener el valor del rol desde el formulario (suponiendo que se envía mediante POST)
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        
            // Validar si el nombre está presente y no está vacío
            if (empty($nombre)) {
                // Manejar el error o devolver un mensaje de error al usuario
                return false;
            }
        
            // Preparar la consulta SQL
            $sql = "SELECT * FROM campeon WHERE nombre = :nombre";
            $sentencia = $conexion->prepare($sql);
            $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        
            // Vinculamos los parámetros de la consulta preparada con los valores de las variables correspondientes.
            $sentencia->setFetchMode(PDO::FETCH_CLASS, "Campeon");    
            $sentencia->execute();
        
            // Obtener resultados
            $resultados = $sentencia->fetchAll();
        
            // Cerrar la conexión
            $conexion = null;
        
            return $resultados;
        }


        
        
            public static function modificarCampeon(Campeon $campeon) : bool {
                $result = false;
    
                // Establecemos conexión con la BBDD
                include_once '../Conexion/conexion.php';
                $conexion = Conexion::obtenerConexion();
        
                // Preparar la consulta SQL
                $sql = "UPDATE campeon SET nombre = :nombre, rol = :rol, dificultad = :dificultad, descripcion = :descripcion WHERE nombre = :nombre";
        
                $sentencia = $conexion->prepare($sql);
    
                $sentencia->bindValue(":nombre", $campeon->getNombre());
                $sentencia->bindValue(":rol", $campeon->getRol());
                $sentencia->bindValue(":dificultad", $campeon->getDificultad());
                $sentencia->bindValue(":descripcion", $campeon->getDescripcion());
    
                $result = $sentencia->execute();
    
                return $result;
            }
        
        
    
        
        public static function eliminarCampeon($nombre): bool {
            try {
                // Establecemos conexión con la BBDD
                include_once '../Conexion/conexion.php';
                $conexion = Conexion::obtenerConexion();

                // Preparamos la consulta SQL
                $sql = "DELETE FROM campeon WHERE nombre = :nombre";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindValue(":nombre", $nombre);

                return $sentencia->execute();
            } catch (PDOException $e) {
                return false;
            }
        }
    }

?>