<?php

class HistorialVenta_model
{
    private $bd;
    private $hVenta;

    public function __construct()
    {
        $this->bd = Conexion::getConexion();
        $this->hVenta = array();
    }

    public function consultarProducto()
    {
        $consulta = $this->bd->query("SELECT * FROM detalle_factura");
        while ($fila = $consulta->fetch_assoc()) {
            $this->hVenta[] = $fila;
        }
        return $this->hVenta;
    }
}
