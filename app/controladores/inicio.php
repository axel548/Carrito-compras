<?php
class Inicio extends Controlador{
    public function __construct(){
        if (!isset($_SESSION['id_usuario'])) {
            redirect('usuarios/login');
        }
        $this->modeloInicio = $this->modelo('modeloInicio');
    }
    
    public function index(){
        if (isset($_SESSION['id_usuario'])) {
            $this->vista('inicio/index');
        }
    }
}
?>