<?php



session_start();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$conexion = new mysqli("localhost", "root", "", "inventario");
$proceso = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario' ANd contraseña='$contraseña' ");

if ($resultado = mysqli_fetch_array($proceso)) {
    $_SESSION['u_usuario'] = $usuario;
    header("Location: menuPrincipal.php");
} else {
    header("Location: login.php");
    print("ERROR");
}
