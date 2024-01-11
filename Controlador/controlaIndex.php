<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['ver_campeones'])) {
        header("Location: ../Vista/formVerCampeon.php");
        exit();
    } elseif (isset($_POST['ver_campeones_rol'])) {
        header("Location: ../Vista/formVerRol.php");
        exit();
    } elseif (isset($_POST['insertar_campeon'])) {
        header("Location: ../Vista/formInsertar.php");
        exit();
    } elseif (isset($_POST['buscar_campeon'])) {
        header("Location: ../Vista/formBuscar.php");
        exit();
    }
}
?>
