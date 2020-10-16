<?php

require_once 'modelo/Productos_model.php';
require_once 'modelo/Proveedores_model.php';


class Productos_controller
{
    private $productos_model;
    private $proveedores_model;

    public function __construct()
    {
        $this->productos_model = new Productos_model();
       /*  $this->proveedores_model = new Proveedores_model(); */
    }

    public function menuProductos()
    {
        $consulrarProductos = $this->productos_model->consultarProductos();
       /*  $consultaProveedor = $this->proveedores_model->consultarProveedor(); */
        require_once 'vista/productos.php';
    }

    public function guardarProductos()
    {
        $dato['id_categoria'] = $_POST['id_categoria'];
       /*  $dato['id_proveedor'] = $_POST['id_proveedor']; */
        $dato['nombre_producto'] = $_POST['nombre_producto'];
        $dato['precio'] = $_POST['precio'];
        $dato['cantidad'] = $_POST['cantidad'];
        $dato['fecha_caducidad_del_producto'] = $_POST['fecha_caducidad_del_producto'];
        $this->productos_model->insertProductos($dato);
        $this->menuProductos();
    }

    public function eliminarProductos()
    {
        $id_productos = $_REQUEST['id_productos'];
        $this->productos_model->eliminarProductos($id_productos);
        $this->menuProductos();
    }

    public function actualizarProducto()
    {
        $dato['id_proveedor'] = $_POST['id_proveedor'];
        $dato['nombre_producto'] = $_POST['nombre_producto'];
        $dato['precio'] = $_POST['precio'];
        $dato['cantidad'] = $_POST['cantidad'];
        $dato['fecha_caducidad_del_producto'] = $_POST['fecha_caducidad_del_producto'];
        $this->productos_model->actualizarProductos($dato);
        $this->menuProductos;
    }

    public function modificarProducto()
    {
        $id_productos = $_REQUEST['id_productos'];
        $consultaProveedor = $this->proveedores_model->consultarProveedor();
        $consulrarProductos = $this->productos_model->consultarProductosPorId($id_productos);
        $this->menuProductos;
    }
}
