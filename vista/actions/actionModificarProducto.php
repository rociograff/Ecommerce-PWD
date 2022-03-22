<?php
include_once '../../configuracion.php';

$datos = data_submitted();

$controlDeposito = new control_deposito();
$respuesta = $controlDeposito->modificarProducto($datos);

if ($respuesta['messageErr'] != "?messageErr=") {
    $message = $respuesta['messageErr'];
} else {
    $message = $respuesta['messageOk'];
}

header('Location: ../deposito/administrarProductos.php' . $message);
exit;
