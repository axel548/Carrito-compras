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
}
?>