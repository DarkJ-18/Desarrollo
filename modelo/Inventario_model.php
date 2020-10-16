<?php

class Inventario_model
{
    private $bd;
    private $inventario;

    public function __construct()
    {
        $this->bd = Conexion::getConexion();
        $this->inventario = array();
    }

    public function consultarInventario()
    {
        $consulta = $this->bd->query("SELECT * FROM productos");
        while ($fila = $consulta->fetch_assoc()) {
            $this->inventario[] = $fila;
        }
        return $this->inventario;
    }
}
