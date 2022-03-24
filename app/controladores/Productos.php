<?php
class Productos extends Controlador{
    public function __construct(){
        if (!isset($_SESSION['id_usuario'])) {
            redirect('usuarios/login'); 
        }
        $this->modeloProductos = $this->modelo('modeloProductos');
        $this->helpers = $this->modelo('Helpers');
    }
    public function index(){
        $getProductos = $this->modeloProductos->getProductos();
        $data = [
            'productos' => $getProductos
        ];
        $this->vista('Productos/index', $data);
    }
    public function crearProduc(){
        $getCatego = $this->helpers->getCategorias();
        $data = [
            'categorias' => $getCatego
        ];
        $this->vista('Productos/crearProductos', $data);
    }
    public function guardarProduc(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        //Subir imagen al servidor
        $archivo = $_FILES['imagen']['tmp_name'];
        $nombrearchivo = $_FILES['imagen']['name'];
        $info = pathinfo($nombrearchivo);
        $extension = $info['extension'];
        $nombre_imagen = $_SESSION['id_usuario'].'-'.rand(00000,99999);
        move_uploaded_file($archivo, RUTAIMG . '/public/productos/'.$nombre_imagen.'.'.$extension);
        $ruta =$nombre_imagen.'.'.$extension;

        $data = [
            'nombre' => trim($_POST['nombre']),
            'mensaje' => trim($_POST['mensaje']),
            'precio' => trim($_POST['precio']),
            'stock' => trim($_POST['stock']),
            'categoria' => trim($_POST['categoria']),
            'imagen' => trim($ruta),
        ];

        if ($this->modeloProductos->agregarProductos($data)) {
            //redirect('publicaciones');
            redirect('alertas/agrego_productos');
        }else{
            die('No guardo la publicación');
        }
    }
    public function vistaEditarProduc($id){
        $productos = $this->modeloProductos->productosPorId($id);
        $getCatego = $this->helpers->getCategorias();
        $data = [
            'id_producto' => $id,
            'id_categoria' => $productos->categoria_id,
            'nombre' => $productos->nombre,
            'descripcion' => $productos->descripcion,
            'precio' => $productos->precio,
            'stock' => $productos->stock,
            'oferta' => $productos->oferta,
            'fecha' => $productos->fecha,
            'imagen' => $productos->imagen,
            'categorias' => $getCatego,
        ];
        $this->vista('Productos/editarProductos', $data);
    }
    public function editarProducto($id){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $archivo = $_FILES['imagen']['tmp_name'];
        if ($archivo == '') {
            $ruta = $_POST['ruta'];
        }else {
            $imagen_eliminar = $_POST['ruta'];
            $borrar_im = RUTAIMG . '/public/productos/' . $imagen_eliminar;
            unlink($borrar_im);
            $nombrearchivo = $_FILES['imagen']['name'];
            $info = pathinfo($nombrearchivo);
            $extension = $info['extension'];
            $nombre_imagen = $_SESSION['id_usuario'].'-'.rand(00000,99999);
            move_uploaded_file($archivo, RUTAIMG . '/public/productos/'.$nombre_imagen.'.'.$extension);
            $ruta = $nombre_imagen.'.'.$extension;
        }  
        $data = [
            'id' => $id,
            'nombre' => trim($_POST['nombre']),
            'mensaje' => trim($_POST['mensaje']),
            'precio' => trim($_POST['precio']),
            'stock' => trim($_POST['stock']),
            'categoria' => trim($_POST['categoria']),
            'imagen' => trim($ruta),
        ];
       
        if ($this->modeloProductos->actualizarProducto($data)) {
            //redirect('publicaciones');
            redirect('alertas/edito_producto');
        }else {
            die('Ocurrio un error');
        }
    }   
    public function eliminarProduc($id, $imagen){
        if ($this->modeloProductos->borrarProducto($id)) {
            $borrar_im = RUTAIMG . '/public/productos/' . $imagen;
            unlink($borrar_im);
           // redirect('publicaciones');
            redirect('alertas/elimino_producto');
        }else {
            die('No se pudo eliminar el producto.');
        }
    }
}
?>