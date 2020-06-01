<?php 
class modeloProductos{
    private $db;
    public function __construct(){
        $this->db = new Conexion();
    }
    public function getProductos(){
            $query = "SELECT *, productos.id as id_produco,
                                productos.fecha as fecha_producto,
                                productos.nombre as nombre_producto,
                                categorias.id as id_categoria,
                                categorias.fecha as fecha_categoria,
                                categorias.nombre as nombre_categoria
                            FROM  productos, categorias
                            WHERE productos.categoria_id = categorias.id
                            ORDER BY productos.fecha ASC";
        return $this->db->resultquery($query);
    }
    public function agregarProductos($data){
        $nombre = $data['nombre'];
        $id_categoria = $data['categoria'];
        $mensaje = $data['mensaje'];
        $imagen = $data['imagen'];
        $precio = $data['precio'];
        $stock = $data['stock'];
        $hoy = date('Y-m-d H:i:s');
        // id    categoria_id     nopmbre     descripcion     precio     stock     oferta    fecha     imagen
        $ins = $this->db->query("INSERT INTO productos VALUES(DEFAULT,'$id_categoria','$nombre','$mensaje','$precio','$stock',NULL,'$hoy','$imagen')");
        if ($ins) {
            return true;
        }else {
            return false;
        }
    }
    public function productosPorId($id){
        $query = $this->db->query("SELECT * FROM productos WHERE id = '$id'");
        $row = $query->fetch_object();
        return $row;
    }
    public function borrarProducto($id){
        $del = $this->db->query("DELETE FROM productos WHERE id = '$id' ");
        if ($del) {
            return true;
        }else {
            return false;
        }
    }
    public function actualizarProducto($data){
        $id = $data['id'];
        $nombre = $data['nombre'];
        $id_categoria = $data['categoria'];
        $mensaje = $data['mensaje'];
        $imagen = $data['imagen'];
        $precio = $data['precio'];
        $stock = $data['stock'];

        $up = $this->db->query("UPDATE productos SET categoria_id = '$id_categoria', nombre = '$nombre', descripcion = '$mensaje', precio = '$precio', stock = '$stock', imagen = '$imagen' WHERE id = '$id' ");
        if ($up) {
            return true;
        }else {
            return false;
        }
    }
}
?>