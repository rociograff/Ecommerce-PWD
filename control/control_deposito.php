<?php
include_once '../../configuracion.php';

class control_deposito
{
    private $retorno;

    public function __construct()
    {
        $this->retorno = ['messageErr' => "?messageErr=", 'messageOk' => "?messageOk="];
    }

    public function getRetorno()
    {
        return $this->retorno;
    }


    public function verificarDeposito($nombrePagina)
    {
        $valido = false;
        $sesion = new session();

        if (!$sesion->activa()) { //Verifico si la sesion esta activa
            header('Location: ../login/login.php?message=' . urlencode("Sesion no iniciada"));
            exit;
        }

        $roles = $sesion->getRoles(); //Tomo el arreglo de roles de la sesion 
        $rolTemporal = 0; //Seteo el rol temporal en 0
        if (count($roles) > 1) { //Verifico que la longitud del arreglo sea mayor a 1
            $rolTemporal = $roles[1]; //Le asigno el rol temporal a la segunda posicion del arreglo 
        }

        $abmUsuarioRol = new abmusuariorol(); //Creo un nuevo abm usuario rol
        $listaUsRol = $abmUsuarioRol->buscar(['idusuario' => $sesion->getIdusuario()]); //Busco los roles del usuario con su id
        $abmMenu = new abmmenu(); //Creo un nuevo abm menu
        $listaMenu = $abmMenu->buscar(['menombre' => $nombrePagina]); //Busco el nombre del menu con el nombre de la pagina pasada por parametro
        if (count($listaMenu) > 0 && count($listaUsRol) > 0) { //Busco el menu
            $objUsRol = $listaUsRol[0]; //objUsRol le asigno el primer idusuario encontrado
            $objMenu = $listaMenu[0]; //objMenu le asigno el primer nombre encontrado

            //y comparo el idPadre con el rol temporal o el rol principal del usuario
            if ($objMenu->getIdpadre() == $objUsRol->getObjRol()->getIdrol() || $objMenu->getIdpadre() == $rolTemporal) {
                $valido = true; //retorna true si se cumple la igualdad
            }
        }
        return $valido;
    }


    public function cancelarCompra($datos, $listaCE)
    {
        $abmCompraEstado = new abmcompraestado();
        $retorno = $this->getRetorno();
        $datos['cefechaini'] = $listaCE[0]->getCefechaini();
        $datos['idcompraestadotipo'] = 4;
        $datos['cefechafin'] = date('Y-m-d H:i:s');
        $exito = $abmCompraEstado->modificacion($datos);
        if ($exito) {
            $retorno['messageOk'] .= urlencode("Compra cancelada");
        } else {
            $retorno['messageErr'] .= urlencode("Error en la cancelacion");
        }
        return $retorno;
    }


    public function deshabilitarProducto($datos)
    {
        $retorno = $this->getRetorno();
        $abmProducto = new abmproducto();

        $lista = $abmProducto->buscar($datos);

        if (isset($lista[0])) {
            $exito = $abmProducto->deshabilitarProd($datos);
            if ($exito) {
                if ($lista[0]->getProdeshabilitado() == '0000-00-00 00:00:00') {
                    $retorno['messageOk'] .= urlencode("Producto deshabilitado correctamente");
                } else {
                    $retorno['messageOk'] .= urlencode("Producto habilitado correctamente");
                }
            } else {
                $retorno['messageErr'] .= urlencode("Error en la deshabilitación");
            }
        } else {
            $retorno['messageErr'] .= urlencode("Producto no encontrado en la base de datos");
        }
        return $retorno;
    }


    public function modificarProducto($datos)
    {
        $retorno = $this->getRetorno();
        $datosBusqueda['idproducto'] = $datos['idproducto'];

        $abmProducto = new abmproducto();

        $lista = $abmProducto->buscar($datosBusqueda);

        if (isset($lista)) {
            $exito = $abmProducto->modificacion($datos);
            if ($exito) {
                $retorno['messageOk'] .= urlencode("Producto modificado");
            } else {
                $retorno['messageErr'] .= urlencode("Error en la modificación");
            }
        } else {
            $retorno['messageErr'] .= urlencode("Producto no encontrado en la base de datos");
        }
        return $retorno;
    }

    public function nuevoProducto($imagen, $datos)
    {
        $retorno = $this->getRetorno();
        $abmProducto = new abmproducto();

        $datosBusqueda['idproducto'] = $datos['idproducto'];
        $listaProductos = $abmProducto->buscar($datosBusqueda);

        if (count($listaProductos) > 0) {
            $retorno['messageErr'] .= urlencode("El ID ingresado ya existe");
        } else {
            $datos['procantventas'] = 0;
            $exito = $abmProducto->alta($datos);

            if ($exito) {
                $control_carga_imagen = new control_imagen();
                $control_carga_imagen->cargarImagen($imagen, $datos['idproducto']);
                $retorno['messageOk'] .= urlencode("Producto cargado correctamente");
            } else {
                $retorno['messageErr'] .= urlencode("Error en la carga del producto");
            }
        }
        return $retorno;
    }
}
