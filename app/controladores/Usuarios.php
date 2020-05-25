<?php
class Usuarios extends Controlador{

    public function __construct(){
        $this->modeloUsuario = $this->modelo('modeloUsuarios');
    }
    public function index(){
        if ($this->checarLogueo()) {
			redirect('inicio');
		}else{
            $this->vista('usuarios/index');
		}
    }
    public function registro(){
        if (!$this->checarLogueo()) {
            $this->vista('usuarios/registro');
        }
        else{
            $this->vista('inicio/index');
        }
    }
    public function login(){
        if (!$this->checarLogueo()) {
            $this->vista('usuarios/login');
        }
        else{
            $this->vista('inicio/index');
        }
    }
    public function slider(){
        if (!$this->checarLogueo()) {
            $imgRecup = $this->modeloUsuario->imagRp();
            $data = [
                'imagRe' => $imgRecup
            ];
            $this->vista('usuarios/slider', $data);
        }
        else{
            $this->vista('inicio/index');
        }
    }
    public function contacto(){
        if (!$this->checarLogueo()) {
            $this->vista('usuarios/contacto');
        }
        else{
            $this->vista('inicio/index');
        }
    }
    public function registrarse(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'nombre' => trim($_POST['nombre']),
            'correo' => trim($_POST['correo']),
            'pass' => trim($_POST['pass'])
        ];
        $data['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);
        if ($this->modeloUsuario->altaDeUsuario($data)) {
            $this->vista('usuarios/login');
        }else{
            die('No se pudo registrar');
        }
    }
    public function iniciarSesion(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'correo' => trim($_POST['correo']),
            'pass' => trim($_POST['pass'])
        ];
        $usuario_logueado = $this->modeloUsuario->login($data['correo'], $data['pass']);
        if ($usuario_logueado) {
            $this->crearSesionDeUsuario($usuario_logueado);
        }else {
            $this->vista('usuarios/login');
        }
    }
    public function crearSesionDeUsuario($user){
        $_SESSION['id_usuario'] = $user->id;
        $id_usr = $user->id;
        $usrbusc = $this->modeloUsuario->buscarUsuario($id_usr);
        $data = [
            'usuario' => $usrbusc
        ];
        foreach($data['usuario'] as  $_SESSION['usr']){
        }
        //redirect('publicaciones');
        redirect('alertas/entro');
    }
    public function salir(){
        unset($_SESSION['id_usuario']);
        unset($_SESSION['usr']);
        session_destroy();
        redirect('usuarios/login');
    }
    public function checarLogueo(){
        if (isset($_SESSION['id_usuario'])) {
            return true;
        }else {
            return false;
        }
    }
}
?>