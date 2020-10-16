<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale-1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet" href="Diseño/diseñoInventario.css">
  <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
  <title>Menu inventario</title>
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
      <h1>Consultar Inventario</h1>
    </div>
    <form action="">
      <div class="parrafofiltrar">
        <p>Filtrar por codigo o nombre</p>

        <input type="text" class="filtrar" placeholder="Codigo o  nombre del producto." required />
        <div class="boton">
          <input class="cta1" type="submit" value="Consultar" />
        </div>
    </form>
    <div class="contect-select">
      <p>Filtrar por categoria</p>

      <select>
        <option>Selecciona una categoria</option>
        <option>Carnes Frias</option>
        <option>Lácteos</option>
      </select>
      <i></i>
    </div>
  </div>

  <div id="main-container">
    <table class="tabla" border="1">
      <thead>
        <tr>
          <th>Id_Producto</th>
          <th>Id_Proveedor</th>
          <th>Fecha</th>
          <th>Cantidad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <img src="../imagenes/basura.ico" /> &nbsp&nbsp&nbsp
            <img src="../imagenes/actualizar.ico" />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
</body>

</html>