<?php

class Conexion
{

    public static function getConexion()
    {
        $conexion = new mysqli("localhost", "root", "", "inventario");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
