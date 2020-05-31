<?php
class Administrador extends Controlador{
    public function __construct(){
        $this->modeloAdministrador = $this->modelo('modeloAdmin');
    }

    public function index(){
        if ($this->checarLogueo()) {
			redirect('inicio');
		}else{
            $this->vista('Administrador/loginAd');
		}
    }/*
    public function iniciarSesion(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'correo' => trim($_POST['correo']),
            'pass' => trim($_POST['pass'])
        ];
        $usuario_logueado = $this->modeloAdministrador->loginadmin($data['correo'], $data['pass']);
        if ($usuario_logueado) {
            $this->crearSesionDeUsuario($usuario_logueado);
        }else {
            $this->vista('alertas/alert_admin');
        }
    }    
    public function crearSesionDeUsuario($user){
        $_SESSION['id_usuario_admin'] = $user->id;
        $id_usr = $user->id;
        $usrbusc = $this->modeloAdministrador->buscarUsuariadmin($id_usr);
        $data = [
            'usuario_admin' => $usrbusc
        ];
        foreach($data['usuario_admin'] as  $_SESSION['usr']){
        }
        //redirect('publicaciones');
        redirect('alertas/entro');
    }
    public function saliradmin(){
        unset($_SESSION['id_usuario_admin']);
        unset($_SESSION['usr']);
        session_destroy();
        redirect('Administrador/index');
    }*/
    public function checarLogueo(){
        if (isset($_SESSION['id_usuario'])) {
            return true;
        }else {
            return false;
        }
    }
}
?>