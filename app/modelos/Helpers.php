<?php 
class Helpers{
    private $db;
    public function __construct(){
        $this->db = new Conexion();
    }

    public function getCategorias(){
        $query = "SELECT * FROM categorias ORDER BY id ASC";
        return $this->db->resultquery($query);
    }
    public function getRamdon($limit){
        $query = "SELECT * FROM productos ORDER BY RAND() limit $limit";
        return $this->db->resultquery($query);
    }
    public function getAllCategoria($id){
        $query = "SELECT p.*, c.nombre AS catnombre FROM productos p 
                    INNER JOIN categorias c ON c.id = p.categoria_id 
                    WHERE p.categoria_id = '$id' 
                    ORDER BY id ASC";
        return $this->db->resultquery($query);
    }
}
?>