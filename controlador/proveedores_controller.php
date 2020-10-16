<?php

require_once 'modelo/proveedores_model.php';


class Proveedores_controller
{
    private $proveedores_model;

    public function __construct()
    {
        $this->proveedores_model = new Proveedores_model();
    }

    public function menuProveedores()
    {
        $consultaProveedor = $this->proveedores_model->consultarProveedor();
        require_once 'vista/proveedores.php';
    }

    public function guardarProveedor()
    {
        $dato['nombre_proveedor'] = $_POST["nombreProveedor"];
        $dato['telefono'] = $_POST["telefono"];
        $dato['correo'] = $_POST["correo"];
        $this->proveedores_model->insertProveedores($dato);
        $this->menuProveedores();
    }

    public function eliminarProveedor()
    {
        $id = $_REQUEST['id_proveedor'];
        $this->proveedores_model->eliminarProveedor($id);
        $this->menuProveedores();
    }

    public function actualizarProveedor()
    {
        $dato['id'] = $_POST['id_proveedor'];
        $dato['nombre_proveedor'] = $_POST["nombreProveedor"];
        $dato['telefono'] = $_POST["telefono"];
        $dato['correo'] = $_POST["correo"];
        $this->proveedores_model->actualizarProveedor($dato);
        $this->menuProveedores();
    }

    public function modificarProveedor()
    {
        $id = $_REQUEST['id'];
        $consultarProveedor = $this->proveedores_model->consultaProveedorPorId($id);
        $this->menuProveedores();
    }
}
