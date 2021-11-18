<?php
include_once '../../configuracion.php';

$titulo = 'Actualizar Menú';

include_once '../estructuras/cabecera.php';

$datos = data_submitted();
$abmMenu = new abmmenu();

$arrayBusqueda = ["idmenu" => $datos['idmenu']];

$listaMenus = $abmMenu->buscar($arrayBusqueda);
$objMenu = $listaMenus[0];

?>

<div class="container mt-3">
    <h4 class="text-center">Modificar Menu</h4>
    <div class="col-md-4"></div>
    <div class="offset-md-4">
        <form action="../actions/actionModificarMenu.php" method="post" class="col-md-6 mt-3 " id="actualizarMenu" name="actualizarMenu">
            <div class="">
                <div class="form-floating mb-3">
                    <input class="form-control" id="idmenu" name="idmenu" type="text" placeholder="ID menu" value="<?php echo $objMenu->getIdmenu() ?>" hidden>
                    <label for="idmenu">ID menu</label>
                </div>
            </div>
            <div class="">
                <div class="form-floating mb-3">
                    <input class="form-control" id="menombre" name="menombre" type="text" placeholder="Nombre del menu" value="<?php echo $objMenu->getMenombre() ?>" required>
                    <label for="menombre">Nombre del menu</label>
                </div>
            </div>
            <div class="">
                <div class="form-floating mb-3">
                    <input class="form-control" id="medescripcion" name="medescripcion" type="text" placeholder="Descripción del menu" value="<?php echo $objMenu->getMedescripcion() ?>" required>
                    <label for="medescripcion">Descripción del menu</label>
                </div>
            </div>
            <div class="">
                <div class="form-floating mb-3">
                    <input class="form-control" id="idpadre" name="idpadre" type="text" placeholder="ID Padre" value="<?php echo $objMenu->getIdpadre() ?>" required>
                    <label for="idpadre">ID Padre: </label>
                </div>
            </div>
            <div class=" mb-3">
                <div class="d-grid">
                <button  class="btn" type="submit" style="color: white;background: rgb(0,212,255);background: linear-gradient(90deg, rgba(0,212,255,1) 0%, rgba(194,2,160,1) 0%, rgba(139,0,142,1) 100%);">Modificar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php

include_once '../estructuras/pie.php';

?>