<?php
include_once "../Modelo/CampeonDB.php";

// En controlaModificar.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si los campos del formulario están presentes y no están vacíos
    if (isset($_POST["nombre"], $_POST["nuevoNombre"], $_POST["nuevoRol"], $_POST["nuevaDificultad"], $_POST["nuevaDescripcion"]) &&
        !empty($_POST["nombre"]) && !empty($_POST["nuevoNombre"]) && !empty($_POST["nuevoRol"]) && !empty($_POST["nuevaDificultad"]) && !empty($_POST["nuevaDescripcion"])) {

        // Recoge los datos del formulario
        $nombreCampeon = $_POST["nombre"];
        $nuevoNombre = $_POST["nuevoNombre"];
        $nuevoRol = $_POST["nuevoRol"];
        $nuevaDificultad = $_POST["nuevaDificultad"];
        $nuevaDescripcion = $_POST["nuevaDescripcion"];

        // Obtén el campeón actual para modificar
        $campeones = CampeonDB::buscarCampeon($nombreCampeon);

        // Verifica si se encontraron campeones
        if (!empty($campeones)) {
            $campeon = $campeones[0]; // Obtén el primer campeón del array

            // Modifica los datos del campeón
            $campeon->setNombre($nuevoNombre);
            $campeon->setRol($nuevoRol);
            $campeon->setDificultad($nuevaDificultad);
            $campeon->setDescripcion($nuevaDescripcion);

            // Llama a la función de modificación
            $modificacionExitosa = CampeonDB::ModificarCampeon($campeon);

            if ($modificacionExitosa) {
                echo "El campeón ha sido modificado exitosamente.";
            } else {
                echo "Error al intentar modificar el campeón.";
            }
        } else {
            echo "Error: No se encontró el campeón a modificar.";
        }
    } else {
        echo "Error: Todos los campos del formulario deben ser completados.";
    }
} else {
    echo "Acceso no permitido.";
}

?>
