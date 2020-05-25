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
        $ins = $this->db->query("INSERT INTO imagenes VALUES(DEFAULT,'$titulo','$id','$hoy','$imagen')");
        if ($ins) {
            return true;
        }else {
            return false;
        }
    }
    public function imagenRec(){
        $query = "SELECT *, imagenes.id as id_imagenes,
                    imagenes.title as titulo_imagenes,
                        usuarios.id as id_usuario
                        FROM  imagenes, usuarios
                        WHERE imagenes.id_usuario = usuarios.id
                        ORDER BY imagenes.fecha ASC;";
        return $this->db->resultquery($query);
    } 
    public function borrarImagen($id){
        $del = $this->db->query("DELETE FROM imagenes WHERE id = '$id' ");
        if ($del) {
            return true;
        }else {
            return false;
        }
    }
}
?>