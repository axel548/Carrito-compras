<?php
class modeloUsuarios{
    private $db;
    public function __construct(){
        $this->db = new Conexion();
    }

    public function imagRp(){
        $query = "SELECT * FROM carousel ORDER BY fecha ASC;";
        return $this->db->resultquery($query);
    } 
    public function altaDeUsuario($data){
        $nombre = $data['nombre'];
        $correo = $data['correo'];
        $pass = $data['pass'];

        $ins = $this->db->query("INSERT INTO usuarios VALUES(DEFAULT,'$nombre', '$correo', '$pass', 2, '')");

        if ($ins) {
            return true;
        }else{
            return false;
        }
    }
    public function login($correo, $pass){
        $query = $this->db->query("SELECT * FROM usuarios WHERE correo = '$correo'");
        $resultado = $query->fetch_object();

        $hashed_pass = $resultado->pass;
        if (password_verify($pass, $hashed_pass)) {
            return $resultado;
        }else{
            return false;
        }
    }
    public function buscarUsuario($id_usr){
        $query = "SELECT nombre, correo, rol FROM usuarios WHERE id = '$id_usr'";
        return $this->db->resultquery($query);
    }
    public function getCategorias(){
        $query = "SELECT * FROM categorias ORDER BY id ASC";
        return $this->db->resultquery($query);
    }
    public function vercat($id){
        $query = "SELECT * FROM categorias WHERE id ='$id'";
        return $this->db->resultquery($query);
    }
}
?>