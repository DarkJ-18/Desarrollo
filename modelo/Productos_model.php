<?php

class Productos_model
{
    private $bd;
    private $productos;

    public function __construct()
    {
        $this->bd = Conexion::getConexion();
        $this->productos = array();
    }

    public function consultarProductos()
    {
        $consulta = $this->bd->query("SELECT p.id_productos,id_productos,p.nombre_producto,p.cantidad,p.fecha_caducidad_del_producto, c.id_categoria, c.nombre AS 'categoria', prov.id_proveedor AS 'proveedor' FROM productos p INNER JOIN categoria c ON p.id_productos = c.id_categoria INNER JOIN proveedores prov ON p.id_productos = prov.id_proveedor");
        $fila = $consulta->fetch_assoc();
        $this->productos[] = $fila;
        return $this->productos;
        /*  while ($fila = $consulta->fetch_assoc()) {
            $this->productos[] = $fila;
        }
        return $this->productos; */
    }

    public function consultarProductosPorId($id_productos)
    {
        $consulta = $this->bd->query("SELECT * FROM productos WHERE id_productos = " . $id_productos);
        $fila = $consulta->fetch_assoc();
        $this->productos[] = $fila;
        return $this->productos;
    }

    public function insertProductos($dato)
    {
        $id_categoria = $dato['id_categoria'];
        $id_proveedor = $dato['id_proveedor'];
        $nombre_producto = $dato['nombre_producto'];
        $precio = $dato['precio'];
        $cantidad = $dato['cantidad'];
        $fecha_caducidad_del_producto = $dato['fecha_caducidad_del_producto'];

        $consulta = "INSERT INTO productos (id_categoria,id_proveedor,nombre_producto, precio, cantidad, fecha_caducidad_del_producto) VALUES (''$id_categoria','$id_proveedor','$nombre_producto', '$precio', '$cantidad', '$fecha_caducidad_del_producto') ";
        mysqli_query($this->bd, $consulta) or die("Error al guardar el producto");
    }

    public function eliminarProductos($id_productos)
    {
        $consulta = "DELETE FROM productos WHERE id_productos=$id_productos";
        mysqli_query($this->bd, $consulta) or die("Error al eliminar proveedor");
    }

    public function actualizarProductos($dato)
    {

        $id_categoria = $dato['id_categoria'];
        $id_proveedor = $dato['id_proveedor'];
        $nombre_producto = $dato['nombre_producto'];
        $precio = $dato['precio'];
        $cantidad = $dato['cantidad'];
        $fecha_caducidad_del_producto = $dato['fecha_caducidad_del_producto'];

        $consulta = "UPDATE productos SET id_categoria= $id_categoria, id_proveedor= $id_proveedor,nombre_producto= $nombre_producto, precio= $precio, cantidad= $cantidad, fecha_caducidad_del_producto=$fecha_caducidad_del_producto";
        mysqli_query($this->bd, $consulta) or die ("Error al actualizar los cambios del producto.");
    }
}
