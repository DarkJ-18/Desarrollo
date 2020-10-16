<?php

class Facturas_model
{
    private $bd;
    private $facturas;

    public function __construct()
    {
        $this->bd = Conexion::getConexion();
        $this->facturas = array();
    }

    public function consultarFactura()
    {
        $consulta = $this->bd->query("SELECT * FROM factura");
        while ($fila = $consulta->fetch_assoc()) {
            $this->facturas[] = $fila;
        }
        return $this->facturas;
    }
}
