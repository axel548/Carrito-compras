<?php 
class modeloInicio{
    private $db;
    public function __construct(){
        $this->db = new Conexion();
    }
    
}
?>