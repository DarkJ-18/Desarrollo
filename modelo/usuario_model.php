<?php
class Usuario_model
{
    private $bd;
    private $usuario;


    public function __construct()
    {
        $this->bd = Conexion::getConexion();
        $this->usuario = array();
    }

    public function inicioSesion($dato)
    {
        session_start();
        $usuario = $dato['usuario'];
        $contraseña = $dato['contraseña'];

        $consulta = $this->bd->query("SELECT * FROM usuario WHERE usuario='$usuario' ANd contraseña='$contraseña' ");

        if ($resultado = mysqli_fetch_array($consulta)) {
            $_SESSION['u_usuario'] = $usuario;
            header("Location: ./index.php?accion=vistaMenu");
        } else {
            header("Location: ./index.php?accion=vistaLogin");
        }

        mysqli_query($this->bd, $consulta) or die("Error al iniciar sesión");
    }
}
