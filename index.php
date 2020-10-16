<?php

require_once 'conexion/Conexion.php';
require_once 'controlador/proveedores_controller.php';
require_once 'controlador/usuario_controller.php';
require_once 'controlador/Menu_controller.php';
require_once 'controlador/Productos_controller.php';
require_once 'controlador/Facturas_controller.php';
require_once 'controlador/Inventario_controller.php';
require_once 'controlador/HistorialVenta_controller.php';

$proveedor = new Proveedores_controller();
$producto = new Productos_controller();
$inventario = new Inventario_controller();
$factura = new Facturas_controller();
$hVenta = new HistorialVenta_controller();
$usuario = new Usuario_controller();
$menu = new Menu_controller();



if (!empty($_REQUEST['accion'])) {

    $metodo = $_REQUEST['accion'];

    /*  if(method_exists($proveedor, $metodo)){
            $proveedor->$metodo();
        }else{
            $proveedor->menuProveedores();
        } */


    switch ($metodo) {
        case method_exists($proveedor, $metodo):
            $proveedor->$metodo();
            break;

        case method_exists($producto, $metodo):
            $producto->$metodo();
            break;

        case method_exists($inventario, $metodo):
            $inventario->$metodo();
            break;

        case method_exists($factura, $metodo):
            $factura->$metodo();
            break;

        case method_exists($hVenta, $metodo):
            $hVenta->$metodo();
            break;

        case method_exists($usuario, $metodo):
            $usuario->$metodo();
            break;

        case method_exists($menu, $metodo):
            $menu->$metodo();
            break;


        default:
            $usuario->vistaLogin();
    }
} else {

    $usuario->vistaLogin();
}
