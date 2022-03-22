<?php
include_once '../../configuracion.php';
$controlAdmin = new control_admin();

$datos = data_submitted();
$valido = false;
if (!$valido) {
    $controlAdmin = new control_admin();
    $valido = $controlAdmin->verificarAdmin("administrarUsuarios");
    if (!$valido) {
        header('Location: ../home/index.php?messageErr=' . urlencode("No tiene los permisos para acceder"));
        exit;
    }
}

$titulo = "Administrar Usuarios";
include_once '../estructuras/cabecera.php';
?>

<div class="container mt-3">
    <?php
    $abmUsuario = new abmusuario();
    $lista = $abmUsuario->buscar(null);
    if (count($lista) > 0) {
    ?>

        <h1 class="text-center">Usuarios en la Base de Datos</h1>

        <!-- Div para el script -->
        <div id="mensaje" class='alert d-flex align-items-center text-center col-md-4 offset-md-4' role='alert'></div>

        <table class='table mt-3'>
            <thead style="color:white;background: rgb(0,212,255);background: linear-gradient(90deg, rgba(0,212,255,1) 0%, rgba(194,2,160,1) 0%, rgba(139,0,142,1) 100%);">
                <tr>
                    <th scope='col' class='text-center'>ID</th>
                    <th scope='col' class='text-center'>Rol</th>
                    <th scope='col' class='text-center'>Nombre</th>
                    <th scope='col' class='text-center'>Contraseña</th>
                    <th scope='col' class='text-center'>Mail</th>
                    <th scope='col' class='text-center'>Deshabilitado</th>
                    <th scope='col' class='text-center'>Modificar</th>
                    <th scope='col' class='text-center'>Deshabilitar</th>
                    <th scope='col' class='text-center'>Eliminar</th>
                </tr>
            </thead>

            <?php
            foreach ($lista as $usuario) {
                $id = $usuario->getIdusuario();
                $abmUsuarioRol = new abmusuariorol();
                $datos['idusuario'] = $id;
                $listaUsuarioRol = $abmUsuarioRol->buscar($datos);
                $rol = $listaUsuarioRol[0]->getObjRol()->getRodescripcion();
            ?>

                <tr id="row<?php echo $id ?>">
                    <td class='text-center'><?php echo $id ?></td>
                    <td class='text-center'><?php echo strtoupper($rol) ?></td>
                    <td class='text-center'><?php echo $usuario->getUsnombre() ?></td>
                    <td class='text-center'><?php echo md5($usuario->getUspass()) ?></td>
                    <td class='text-center'><?php echo $usuario->getUsmail() ?></td>
                    <td id="fechaDeshabilitado<?php echo $id ?>" class='text-center'><?php echo $usuario->getUsdeshabilitado() ?></td>
                    <form method='post' action='formularioModificacionUsuario.php'>
                        <td class='text-center'>
                            <input name='idusuario' id='idusuario' type='hidden' value=<?php echo $id ?>><button class='btn btn-warning btn-sm' type='submit'><i class='fas fa-user-edit'></i></button>
                        </td>
                    </form>
                    <form>
                        <td class='text-center'>
                            <button type="button" id="deshabilitar<?php echo $id ?>" class='btn btn-warning btn-sm' onclick="deshabilitar('deshabilitar<?php echo $id ?>', '<?php echo $id ?>', '<?php echo $usuario->getUsdeshabilitado() ?>')">

                                <?php
                                if ($usuario->getUsdeshabilitado() == '0000-00-00 00:00:00') {
                                ?>

                                    <i class="bi bi-toggle-off"></i>

                                <?php
                                } else {
                                ?>

                                    <i class="bi bi-toggle-on"></i>

                                <?php
                                }
                                ?>

                            </button>
                        </td>
                    </form>
                    <form action="../actions/actionEliminarUsuario.php">
                        <td class='text-center'>
                            <input name='idusuario' id='idusuario' type='hidden' value=<?php echo $id ?>><button type="submit" class='btn btn-danger btn-sm'><i class='bi bi-trash'></i></button>
                        </td>
                    </form>
                </tr>

            <?php
            }
            ?>

        </table>

    <?php
    } else {
    ?>

        <h1 class='text-center'>No hay usuarios cargados en la base de datos</h1>

    <?php
    }
    ?>

</div>

<script>
    function deshabilitar(idBoton, idUsuario, usDeshabilitado) {
        $.ajax({ //Llama la funcion ajax, funcion asincrona
            data: { //Pasa los parametros por post o get
                idusuario: idUsuario //Nombre que tiene en la posicion del array en post : valor que tien
            },
            url: "../actions/actionDeshabilitarUsuario.php",
            type: "post", //Metodo por el que pasa los valores
            success: function(respuesta) { //Atrapa la respuesta del action
                respuesta = JSON.parse(respuesta); //Lee la respuesta como un json
                if (respuesta.status == "EXITO") { //Si respuesta en la clave status tiene exito
                    $('#mensaje').removeClass("alert-danger"); //Saco la clase 
                    $('#mensaje').addClass("alert-success");
                    $('#mensaje').html('<i class="bi bi-exclamation-triangle-fill text-center">EXITO</i>'); //Le inserto la linea de html
                    // console.log(respuesta.status);
                    //Modifico el boton
                    if (respuesta.fecha == "0000-00-00 00:00:00") { //Si esta habilitado
                        $('#' + idBoton).html('<i class="bi bi-toggle-off"></i>') //Le asigno el boton de apagado
                    } else {
                        $('#' + idBoton).html('<i class="bi bi-toggle-on"></i>') //Sino le asigno el boton de prendido
                    }
                    $('#fechaDeshabilitado' + idUsuario).html(respuesta.fecha) //Siempre agarro el fechaDeshabilitado con su concatenacion del idUsuario y le pasamos la fecha que trae el json
                } else {
                    $('#mensaje').removeClass("alert-success"); //Le saca la clase success
                    $('#mensaje').addClass("alert-danger"); 
                    $('#mensaje').html('<i class="bi bi-exclamation-triangle-fill text-center">ERROR</i>') //Le inserto el msj de error
                }
            }
        })
        // console.log(idBoton, idUsuario, usDeshabilitado)
    }
</script>

<?php
include_once '../estructuras/pie.php';
?>