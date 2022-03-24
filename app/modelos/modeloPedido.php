<?php 
class modeloPedido{
    private $db;
    public function __construct(){
        $this->db = new Conexion();
    }
    public function getPeidosByUsr($id){
        $query = "SELECT p.id, p.coste, p.localidad, p.provincia, p.direccion FROM pedidos p WHERE p.usuario_id = '$id' ORDER BY id DESC LIMIT 1";
        return $this->db->resultquery($query);
    }
    public function getPedidos($id){
        $query = "SELECT * FROM pedidos WHERE id = '$id'";
        return $this->db->resultquery($query);
    }
    public function getProductosNyPedido($id_pedido){
        /*$query = "SELECT * FROM productos WHERE id IN
                            (SELECT producto_id FROM linea_pedidos WHERE pedido_id = '$id_pedido');";*/
        $query = "SELECT pr.*, lp.unidades FROM productos pr
                                    INNER JOIN linea_pedidos lp ON pr.id = lp.producto_id
                                    WHERE lp.pedido_id = '$id_pedido'";
        return $this->db->resultquery($query);
    }
    public function getAllByUser($id){
        $query = "SELECT p.* FROM pedidos p WHERE p.usuario_id = '$id' ORDER BY id DESC";
        return $this->db->resultquery($query);
    }
    public function agregarPedidos($data){
        $provincia = $data['provincia'];
        $ciudad = $data['ciudad'];
        $direccion = $data['direccion'];
        $id_usuario = $data['id_usuario'];
        $coste = $data['coste'];
        $hora = date('H:i:s');
        $dia = date('Y-m-d'); 

        // id    categoria_id     nopmbre     descripcion     precio     stock     oferta    fecha     imagen
        $ins = $this->db->query("INSERT INTO pedidos VALUES(DEFAULT,'$id_usuario','$provincia','$ciudad','$direccion','$coste','confirm', '$dia', '$hora')");
        if ($ins) {
            return true;
        }else {
            return false;
        }
    }
    public function save_linea(){
        $ins = $this->db->query("SELECT LAST_INSERT_ID() as pedido");
        $pedido_id = $ins->fetch_object()->pedido;
        foreach ($_SESSION['carrito'] as $indice => $elemento){
            foreach ($elemento['productos'] as $productos){
                $insert = $this->db->query("INSERT INTO linea_pedidos VALUES(DEFAULT, {$pedido_id}, {$productos->id}, {$elemento['unidades']})");
            }
        }
        if ($insert) {
            return true;
        }else {
            return false;
        }
    }
    public function actualizarPedido($data){
        $id = $data['id_pedido'];
        $estado = $data['estado'];
 

        $up = $this->db->query("UPDATE pedidos SET estado = '$estado' WHERE id = '$id' ");
        if ($up) {
            return true;
        }else {
            return false;
        }
    }
}
?>