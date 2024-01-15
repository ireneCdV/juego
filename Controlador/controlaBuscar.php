<?php
include_once "../Modelo/CampeonDB.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreBuscado = $_POST["nombre"];

    // Buscar campeón por nombre
    $campeonesEncontrados = CampeonDB::buscarCampeon();

    if ($campeonesEncontrados) {
        foreach ($campeonesEncontrados as $campeon) {
            echo "<h3>Campeon:</h3>";
            echo "<form>";
            echo "<ul>";
            echo "<li> Nombre: <input type='text' value='" . $campeon->getNombre() . "' readonly> </li> <br> " . 
                 "<li> Rol: <input type='text' value='" . $campeon->getRol() . "' readonly> </li> <br> " . 
                 "<li> Dificultad: <input type='text' value='" . $campeon->getDificultad() . "' readonly> </li> <br> " . 
                 "<li> Descripcion: <input type='text' value='" . $campeon->getDescripcion() . "' readonly></li> <br> ";
            echo "</ul>";
            echo "</form>";

            
            // Agregar formulario para modificar
            echo "<form method='post' action='../Vista/formModificar.php'>";
            echo "<input type='hidden' name='nombre' value='" . $campeon->getNombre() . "'>";
            echo "<input type='submit' value='Modificar'>";
            echo "</form>";

            // Agregar formulario para eliminar con confirmación
            echo "<form method='post' action='controlaEliminar.php'>";
            echo "<input type='hidden' name='nombre' value='" . $campeon->getNombre() . "'>";
            echo "<input type='submit' value='Eliminar' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este campeón?\")'>";
            echo "</form>";

            echo "</ul>";
        }
    } else {
        echo "<br> No se ha encontrado un campeón con ese nombre.";
    }
}
?>
