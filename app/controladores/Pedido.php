<?php
class Pedido extends Controlador{
    public function __construct(){
        $this->modeloPedidos = $this->modelo('modeloPedido');
        $this->Helpers = $this->modelo('Helpers');
    } 
    public function index(){
        $this->vista('pedido/index');
    }
    public function add(){
        if(isset($_SESSION['id_usuario'])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            /*  */
            $stats = array(
                'count' => 0,
                'total' => 0
            );
            if (isset($_SESSION['carrito'])) {
                $stats['count'] = count($_SESSION['carrito']);
                foreach ($_SESSION['carrito'] as $indice => $elemento) {
                    foreach ($elemento['productos'] as $producto) {
                        $stats['total'] += $producto->precio*$elemento['unidades'];
                    }
                }
            }
            /*  */
            $coste = $stats['total'];
            $data = [
                'provincia' => trim($_POST['provincia']),
                'ciudad' => trim($_POST['ciudad']),
                'direccion' => trim($_POST['direccion']),
                'id_usuario' => $_SESSION['id_usuario'],
                'coste' => $coste
            ];

            $save = $this->modeloPedidos->agregarPedidos($data);
            $save_lineas = $this->modeloPedidos->save_linea();

            if ($save && $save_lineas) {
                //redirect('publicaciones');
                $_SESSION['pedido'] = "complete";
                redirect('alertas/agrego_pedido');
            }else{
                $_SESSION['pedido'] = "failed";
                die('No guardo la publicación');
            }
        }
        else{
           redirect('usuarios/login');
        }
    }
    public function confirmado(){
        if (isset($_SESSION['id_usuario'])) {
            $id_usuario = $_SESSION['id_usuario'];
            $pedido = $this->modeloPedidos->getPeidosByUsr($id_usuario);
            $dats = [
                'pedido' => $pedido
            ];
            foreach ($dats['pedido'] as $pedido_producto){
                $id_pedido =  $pedido_producto->id;
            }
            $productos = $this->modeloPedidos->getProductosNyPedido($id_pedido);
            $data = [
                'pedido' => $pedido,
                'pedido_productos' => $productos
            ];

            $this->vista('pedido/confirmado', $data);
        }
    }
    public function mis_pedidos(){
        $id_usuario = $_SESSION['id_usuario'];
        $miPedido =  $this->modeloPedidos->getAllByUser($id_usuario);
        $data =[
            'mispedidos' => $miPedido
        ];
        $this->vista('pedido/mis_pedidos', $data);
    }
    public function detalle($id_pedido){
        $pedido = $this->modeloPedidos->getPedidos($id_pedido);
        $productos = $this->modeloPedidos->getProductosNyPedido($id_pedido);
        $data = [
            'pedido' => $pedido,
            'pedido_productos' => $productos
        ];

        $this->vista('pedido/detalle', $data);
    }
    public function gestioncategorias(){
        $gestion = true;
        $Pedido =  $this->Helpers->getPedido();
        $data =[
            'pedidos' => $Pedido
        ];
        $this->vista('pedido/gestionarindex', $data);
    }
    public static function showStatus($status){
        $value = 'Pendiente';
        if ($status == 'confirm') {
            $value = 'Pendiente';
        }elseif ($status == 'preparation') {
            $value = 'En preparacion';
        }elseif ($status == 'ready') {
            $value = 'Preparado para enviar';
        }elseif ($status == 'sended') {
            $value = 'Enviado';
        }
        return $value;
    }
    public function estado(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
        $data = [
            'id_pedido' => trim($_POST['pedido_id']),
            'estado' => trim($_POST['estado']),
        ];
        
        if ($this->modeloPedidos->actualizarPedido($data)) {
            //redirect('publicaciones');
            redirect('alertas/edito_pedido');
        }else {
            die('Ocurrio un error');
        }
    }
}
?>