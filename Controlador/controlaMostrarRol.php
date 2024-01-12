<?php
include_once "../Modelo/CampeonDB.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén todos los campeones desde la base de datos
    $campeones = CampeonDB::getAllRol();
    

    if ($campeones) {
        echo "<h3>Lista de Campeones:</h3>";
        echo "<ul>";
        foreach ($campeones as $campeon) {
            echo "<li> Nombre: " . $campeon->getNombre() .  " </li> <br> " . 
            "<li> Rol: " . $campeon->getRol() . " </li> <br> " . 
            "<li> Dificultad: " . $campeon->getDificultad() . "</li> <br> " . 
            "<li> Descripcion: " . $campeon->getDescripcion() ."</li> <br> " ;
        }
        echo "</ul>";
    } else {
        echo "<br> No se ha podido mostrar los datos correctamente";
    }
}
?>
