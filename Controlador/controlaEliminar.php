<?php
include_once "../Modelo/CampeonDB.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCampeon = $_POST["nombre"];

    // Lógica para eliminar el campeón por su nombre
    $eliminacionExitosa = CampeonDB::eliminarCampeon($nombreCampeon);

    if ($eliminacionExitosa) {
        echo "El campeón ha sido eliminado exitosamente.";
    } else {
        echo "Error al intentar eliminar el campeón.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
