<?php
include_once '../../configuracion.php';
$datos = data_submitted();

$controlAdmin = new control_admin();
$respuesta = $controlAdmin->deshabilitarMenu($datos);

if ($respuesta['messageErr'] != "?messageErr=") {
    $message = $respuesta['messageErr'];
} else {
    $message = $respuesta['messageOk'];
}

header('Location: ../admin/administrarMenus.php' . $message);
exit;
