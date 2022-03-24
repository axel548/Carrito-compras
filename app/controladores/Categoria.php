<?php
class Categoria extends Controlador{
    public function __construct(){
        if (!isset($_SESSION['id_usuario'])) {
            redirect('usuarios/login');
        }
        $this->modeloCategoria = $this->modelo('modeloCategoria');
    }
    public function index(){
        $getCategoria = $this->modeloCategoria->getCategorias();
        $data = [
            'categoria' => $getCategoria
        ];
        $this->vista('categoria/index', $data);
    }
    public function crearCateg(){
        $this->vista('categoria/crearCategoria');
    }
    public function guardarCateg(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'titulo' => trim($_POST['titulo']),
            'mensaje' => trim($_POST['mensaje']),
            'id_usuario' => $_SESSION['id_usuario']
        ];

        if ($this->modeloCategoria->saveCategorias($data)) {
            //redirect('publicaciones');
            redirect('alertas/agrego_categoria');
        }else{
            die('No guardo la categoria');
        }
    }

}
?>