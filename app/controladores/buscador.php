<?php
class Buscador extends Controlador{
    public function __construct(){
        if (!isset($_SESSION['id_usuario'])) {
            redirect('usuarios/login');
        }
        $this->modeloBuscador = $this->modelo('modeloBuscador');
    }

    public function index(){
        $this->vista('buscador/index');
    }
}
?>