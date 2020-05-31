<?php 
class modeloAdmin{
    private $db;
    public function __construct(){
        $this->db = new Conexion();
    }
    
    /*public function loginadmin($correo, $pass){
        $query = $this->db->query("SELECT * FROM usuarios WHERE correo = '$correo'");
        $resultado = $query->fetch_object();

        $hashed_pass = $resultado->pass;
        if (password_verify($pass, $hashed_pass)) {
            return $resultado;
        }else{
            return false;
        }
    }
    public function buscarUsuariadmin($id_usr){
        $query = "SELECT nombre, correo, rol FROM usuarios WHERE id = '$id_usr'";
        return $this->db->resultquery($query);
    }*/
}
?>