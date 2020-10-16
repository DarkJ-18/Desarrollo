<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="Diseño/diseñoMenu.css">
    <title>Menu</title>
</head>

<body>



    <?php

    session_start();
    if (isset($_SESSION['u_usuario'])) {
    ?>

        <a href="./index.php?accion=vistaLogin"><img class="botonsalir" src="imagenes/salir.ico"></a>

        <div class="container">
            <div class="inventario">
                <a href="./index.php?accion=menuInventario"><img class="imgmenu" src="imagenes/caja.ico"></a>
                <h1>inventario</h1>
            </div>
            <div class="proveedores">
                <a href="./index.php?accion=menuProveedores"><img class="imgmenu" src="imagenes/proveedor.ico"></a>
                <h1>Proveedores</h1>
            </div>
            <div class="productos">
                <a href="./index.php?accion=menuProductos"><img class="imgmenu" src="imagenes/productos.ico"></a>
                <h1>Productos</h1>
            </div>
            <div class="facturas">
                <a href="./index.php?accion=menuFacturas"><img class="imgmenu" src="imagenes/facturas.ico"></a>
                <h1>facturas</h1>
            </div>
        </div>

    <?php


    } else {
        header("Location: login.php");
        print("Error!");
    }

    ?>



</body>

</html>