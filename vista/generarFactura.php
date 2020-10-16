<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="Diseño/diseñoGFactura.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <title>Menu Facturas</title>
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
            <H1>Facturas</H1>
        </div>
        <form action="">
            <div class="parrafofiltrar">
                <div class="codigo">
                    <p>Codigo</p>
                    <input type="text" class="filtrar" required>
                </div>
                <div class="vendedor">
                    <p>Vendedor</p>
                    <input type="text">
                </div>

                <div class="fecha">
                    <p>Fecha</p>
                    <input type="date">

                </div>

                <div class="producto">
                    <p>Nombre producto</p>
                    <input type="text">

                </div>

                <div class="cantidad">
                    <p>Cantidad</p>
                    <input type="number">

                </div>
            </div>

            <div class="botones">
                <a href="#" class="cta1">Agregar producto</a>
                <a href="#" class="cta2">Limpiar</a>
                <a href="#" class="aggproducto">Imprimir</a>
            </div>

        </form>



        <div id="main-container">
            <table class="tabla" border="1">
                <thead>
                    <tr>
                        <th>Id_Producto</th>
                        <th>Nombre</th>
                        <th>Existencia</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <div class="icono">
                            <td><img src="imagenes/basura.ico"> &nbsp &nbsp
                                <img src="imagenes/actualizar.ico"></td>
                        </div>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="modal-container1">
        <div class="modal modal-close">
            <p class="close">X</p>
            <h2 class="titulo">Agregar producto</h2>


            <form action="" class="formProducto">
                <p>ID Producto:&nbsp <input input class="color" type="text" placeholder="00015"></p>


                <br>
                <br>
                <div class="select">
                    <p>Seleccionar categoría: &nbsp
                        <select>
                            <option>Selecciona una categoria</option>
                            <option>Carnes Frias</option>
                            <option>Lácteos</option>
                        </select>
                        <i></i>
                    </p>
                </div>

                <br>
                <br>

                <div class="select">
                    <p>Seleccionar proveedor: &nbsp
                        <select>
                            <option>Selecciona un proveedor</option>
                            <option>Pedro</option>
                            <option>Ramiro</option>
                        </select>
                    </p>
                </div>

                <i></i>
                <br>
                <br>
                <p>Nombre producto:&nbsp <input type="text"></p>

                <br>
                <br>
                <p>Precio: &nbsp <input type="text"></p>

                <br>
                <br>
                <p>Cantidad: &nbsp <input type="text"></p>

                <br>
                <br>
                <p>Fecha: &nbsp<input type="date"></p>

                <a href="#" class="btnguardar">Guardar</a>
                <a href="#" class="btncancelar">cancelar</a>

            </form>


        </div>
    </div>

    <div class="modal-container2">
        <div class="modal2 modal-close2">
            <p class="close2">X</p>
            <h2 class="titulo">Agregar categoría</h2>


            <form action="" class="formCat">
                <p>ID Categoría: &nbsp &nbsp<input class="color" type="text" placeholder="00011"></p>
                <br>
                <br>

                <p>Categoría: &nbsp &nbsp<input type="text"></p>

            </form>
            <a href="#" class="btnguardar">Guardar</a>
            <a href="#" class="btncancelar">cancelar</a>

        </div>
    </div>

    <script src="JavaScript/generarFactura.js"></script>
</body>

</html>