<?php

class Proveedores_model
{
    private $bd;
    private $proveedores;

    public function __construct()
    {
        $this->bd = Conexion::getConexion();
        $this->proveedores = array();
    }

    public function consultarProveedor()
    {
        $consulta = $this->bd->query("SELECT * FROM proveedores");
        while ($fila = $consulta->fetch_assoc()) {
            $this->proveedores[] = $fila;
        }
        return $this->proveedores;
    }


    public function consultaProveedorPorId($id)
    {
        $consulta = $this->bd->query("SELECT * FROM proveedores WHERE id_proveedor = " . $id);
        $fila = $consulta->fetch_assoc();
        $this->proveedores[] = $fila;
        return $this->proveedores;
    }



    public function insertProveedores($dato)
    {
        $nombreProveedor = $dato['nombre_proveedor'];
        $telefono = $dato['telefono'];
        $correo = $dato['correo'];

        $consulta = "INSERT INTO proveedores (nombre_proveedor, telefono, correo) VALUES ('$nombreProveedor', $telefono, '$correo')";
        mysqli_query($this->bd, $consulta) or die("Error al guardar el proveedor");
    }


    public function eliminarProveedor($id)
    {
        $consulta = "DELETE FROM proveedores WHERE id_proveedor=$id";
        mysqli_query($this->bd, $consulta) or die("Error al eliminar proveedor");
    }


    public function actualizarProveedor($dato)
    {
        $id_proveedor = $dato['id_proveedor'];
        $nombreProveedor = $dato['nombre_proveedor'];
        $telefono = $dato['telefono'];
        $correo = $dato['correo'];

        $consulta = "UPDATE proveedores SET nombre_proveedor='$nombreProveedor', telefono=$telefono, correo='$correo' WHERE id_proveedor=$id_proveedor";
        mysqli_query($this->bd, $consulta) or die("Error al actualizar los cambios del proveedor.");
    }
}
