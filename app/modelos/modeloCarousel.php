<?php
class modeloCarousel{
    private $db;
    public function __construct(){
        $this->db = new Conexion();
    }

   //id	title	id_usuario	fecha	imagen

    public function agregarImagen($data){
        $titulo = $data['titulo'];
        $id = $data['id_usuario'];
        $imagen = $data['imagen'];
        $hoy = date('Y-m-d H:i:s');
        $ins = $this->db->query("INSERT INTO carousel VALUES(DEFAULT,'$id','$titulo','$hoy','$imagen')");
        if ($ins) {
            return true;
        }else {
            return false;
        }
    }
    public function imagenRec(){
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
    public function borrarImagen($id){
        $del = $this->db->query("DELETE FROM carousel WHERE id = '$id' ");
        if ($del) {
            return true;
        }else {
            return false;
        }
    }
}
?>