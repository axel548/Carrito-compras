<?php 
class modeloCategoria{
    private $db;
    public function __construct(){
        $this->db = new Conexion();
    }
    public function getCategorias(){
        $query = "SELECT * FROM categorias ORDER BY id ASC";
        return $this->db->resultquery($query);
    }
    public function saveCategorias($data){
        $titulo = $data['titulo'];
        $id = $data['id_usuario'];
        $mensaje = $data['mensaje'];
        $hoy = date('Y-m-d H:i:s');
        $ins = $this->db->query("INSERT INTO categorias VALUES(DEFAULT,'$titulo','$mensaje', '$id','$hoy')");
        if ($ins) {
            return true;
        }else {
            return false;
        }
    }
}
?>