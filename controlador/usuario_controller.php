<?php

require_once 'modelo/usuario_model.php';

class Usuario_controller
{
    private $usuario_model;

    public function __construct()
    {
        $this->usuario_model = new Usuario_model();
    }

    public function vistaLogin()
    {
        require_once 'vista/login.php';
    }


    public function iniciarSesion()
    {
        session_start();
        $dato['usuario'] = $_POST["usuario"];
        $dato['contraseña'] = $_POST["contraseña"];
        $this->usuario_model->inicioSesion($dato);
    }
}
