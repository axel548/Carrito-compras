<?php
class Administrador extends Controlador{
    public function __construct(){
        $this->modeloAdministrador = $this->modelo('modeloAdmin');
    }

    public function index(){
        $this->vista('administrador/loginAd');
    }
    public function iniciarSesion(){

    }
}
?>