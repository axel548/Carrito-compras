<?php
class Carousel extends Controlador{
    public function __construct(){
        if (!isset($_SESSION['id_usuario'])) {
            redirect('usuarios/login');
        }
        $this->modeloCarousel = $this->modelo('modeloCarousel');
    }

    //id	title	id_usuario	fecha	imagen

    public function index(){
        $imagenesRec = $this->modeloCarousel->imagenRec();
        $data = [
            'imagenRec' => $imagenesRec
        ];
        $this->vista('carousel/administrar', $data);
    }
    public function agregarImagen(){
        $this->vista('carousel/agregar');
    }
    public function nuevaImagen(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        //Subir imagen al servidor
        $archivo = $_FILES['arch_image']['tmp_name'];
        $nombrearchivo = $_FILES['arch_image']['name'];
        $info = pathinfo($nombrearchivo);
        $extension = $info['extension'];
        $nombre_imagen = $_SESSION['id_usuario'].'-'.rand(00000,99999);
        move_uploaded_file($archivo,  RUTAIMG . '/public/uploads/'.$nombre_imagen.'.'.$extension);
        $ruta =$nombre_imagen.'.'.$extension;

        
        $data = [
            'titulo' => trim($_POST['title']),
            'imagen' => trim($ruta),
            'id_usuario' => $_SESSION['id_usuario']
        ];

        if ($this->modeloCarousel->agregarImagen($data)) {
            //redirect('publicaciones');
            redirect('alertas/agrego_imagen');
        }else{
            die('No guardo la publicación');
        }
    }
    public function eliminarImagen($id, $imagen){
        if ($this->modeloCarousel->borrarImagen($id)) {
            $borrar_im = RUTAIMG . '/public/uploads/' . $imagen;
            unlink($borrar_im);
           // redirect('publicaciones');
            redirect('alertas/elimino_imagen');
        }else {
            die('No se pudo eliminar la publicación.');
        }
    }
}
?>
