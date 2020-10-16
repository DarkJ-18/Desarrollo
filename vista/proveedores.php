<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="Diseño/diseñoProveedores.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <title>Menu Proveedores</title>
</head>

<body>
    <header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="./index.php?accion=vistaMenu">Menu Principal</a></li>
                <li><a href="./index.php?accion=menuInventario">inventario</a></li>
                <li><a href="./index.php?accion=menuProductos">Productos</a></li>
                <li><a href="./index.php?accion=menuProveedores">Proveedores</a></li>
                <li><a href="./index.php?accion=menuFacturas">Facturas</a>
                    <ul class="submenu">
                        <li><a href="./index.php?accion=menuFacturas">Generar Factura</a></li>
                        <li><a href="./index.php?accion=menuHVenta">Historial de ventas</a></li>
                    </ul>
                </li>
                <a href="./index.php?accion=vistaLogin"><img class="botonsalir" src="imagenes/salir.ico"></a>
            </ul>
        </nav>
    </header>
    <div class="container_inventario">

        <div class="cuadroarriba">
            <H1>Proveedores</H1>
        </div>
        <form action="">
            <div class="parrafofiltrar">
                <p>Filtrar por codigo o nombre</p>

                <input type="text" class="filtrar" placeholder="Codigo o  nombre del proveedor." required>
                <div class="botones">
                    <a href="#" class="cta1">Agregar proveedor</a>
                </div>
            </div>
        </form>



        <div id="main-container">
            <table class="tabla" border="1">
                <thead>
                    <tr>
                        <th>Id_Proveedor</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($consultaProveedor as $datos) : ?>
                        <tr>
                            <td><?php echo $datos['id_proveedor']; ?></td>
                            <td><?php echo $datos['nombre_proveedor']; ?></td>
                            <td><?php echo $datos['telefono']; ?></td>
                            <td><?php echo $datos['correo']; ?></td>

                            <div class="icono">
                                <td><a href="./?accion=eliminarProveedor&id=<?php print $dato['id_proveedor']; ?>"><img src="imagenes/basura.ico"></a> &nbsp &nbsp
                                    <a href="./?accion=actualizarProveedor&id=<?php print $dato['id_proveedor']; ?>" class="cta2"><img src="imagenes/actualizar.ico"></a></td>
                            </div>

                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

    </div>

    <div class="modal-container1">
        <div class="modal modal-close">
            <p class="close">X</p>
            <h2 class="titulo">Agregar proveedor</h2>


            <form name="form1" action="../index.php?accion=guardarProveedor" class="formProducto" method="POST">
                <p>ID proveedor:&nbsp <input input class="color" type="text"></p>

                <i></i>
                <br>
                <br>
                <p>Nombre proveedor:&nbsp <input type="text" name="nombreProveedor"></p>

                <br>
                <br>
                <p>Teléfono: &nbsp <input type="text" name="telefono"></p>

                <br>
                <br>
                <p>Correo: &nbsp <input type="email" name="correo"></p>

                <br>
                <br>

                <a href="" class="btnguardar">Guardar</a>
                <a href="" class="btncancelar">cancelar</a>


            </form>


        </div>
    </div>


    <div class="modal-container2">
        <div class="modal2 modal-close2">
            <p class="close2">X</p>
            <h2 class="titulo">Actualizar proveedor</h2>


            <form action="" class="formProducto">
                <p>ID proveedor:&nbsp <input input class="color" type="text" value="0007"></p>

                <i></i>
                <br>
                <br>
                <p>Nombre proveedor:&nbsp <input type="text" name="nombreProveedor" class="nombre"></p>

                <br>
                <br>
                <p>Teléfono: &nbsp <input type="text" name="telefono" class="telefono"></p>

                <br>
                <br>
                <p>Correo: &nbsp <input type="email" name="correo" class="correo"></p>

                <br>
                <br>

                <a href="#" class="btnguardar">Guardar</a>
                <a href="" class="btncancelar">cancelar</a>


            </form>


        </div>
    </div>


    <script src="JavaScript/proveedores.js"></script>

</body>



</html>