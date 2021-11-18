<?php
include_once "../../configuracion.php";

$datos = data_submitted();
$abmMenu = new abmmenu();

$modificado = $abmMenu->modificacion($datos);

if ($modificado) {
    $message = "Menú modificado";
    header('Location: ../admin/administrarMenus.php?Message=' . urlencode($message));
} else {
    $message = "Error al modificar menú";
    header('Location: ../admin/administrarMenus.php?Message=' . urlencode($message));
}