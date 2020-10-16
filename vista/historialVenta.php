<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="Diseño/diseñoHVenta.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <title>Historial venta</title>
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
            <H1>Historial de ventas</H1>
        </div>
        <form action="">
            <div class="parrafofiltrar">
                <p>Codigo Factura</p>
                <input type="text" class="filtrar" required>
            </div>
            <div class="botones">
                <a href="#" class="cta1">Consultar</a>
            </div>
            <div class="date">
                <div class="fechas">
                    <p>De:<input type="date"> </p>
                </div>
                <div class="fecha2">
                    <p>a:&nbsp<input type="date"> </p>
                </div>
            </div>
        </form>



        <div id="main-container">
            <table class="tabla" border="1">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Codigo de factura</th>
                        <th>Vendedor</th>
                        <th>Total</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <div class="icono">
                            <td><img src="imagenes/basura.ico"> &nbsp &nbsp
                                <img src="imagenes/actualizar.ico"> &nbsp &nbsp
                                <img src="imagenes/detalle.ico"></td>
                        </div>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="modal-container1">
        <div class="modal modal-close">
            <p class="close">X</p>
            <h2 class="titulo">Agregar proveedor</h2>


            <form action="" class="formProducto">
                <p>ID proveedor:&nbsp <input input class="color" type="text" placeholder="0007"></p>

                <i></i>
                <br>
                <br>
                <p>Nombre proveedor:&nbsp <input type="text"></p>

                <br>
                <br>
                <p>Teléfono: &nbsp <input type="text"></p>

                <br>
                <br>
                <p>Correo: &nbsp <input type="text"></p>

                <br>
                <br>

                <a href="#" class="btnguardar">Guardar</a>
                <a href="#" class="btncancelar">cancelar</a>


            </form>


        </div>
    </div>



    <script src="JavaScript/historialVenta.js"></script>
</body>

</html>