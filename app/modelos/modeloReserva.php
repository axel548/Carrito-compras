<?php
class modeloReserva{
    private $db;
    public function __construct(){
        $this->db = new Conexion();
    }

    public function addReservas($data){
        $empresa = $data['empresa'];
        $telefono = $data['telefono'];
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $cantPersonas =$data['cant_personas'];
        $correo =$data['correo'];
        $hospedaje =$data['hospedaje'];
        $hr_entrada =$data['hr_entrada'];
        $hr_salida =$data['hr_salida'];
        $dia =$data['dia'];
        $mes =$data['mes'];
        $anio =$data['anio'];
        $tipo_event =$data['tipo_evento'];
        $id = $data['id_usuario'];

        $ins = $this->db->query("INSERT INTO reserva VALUES(DEFAULT,'$empresa','$telefono','$nombre','$apellido','$cantPersonas',
                                '$correo','$hospedaje','$hr_entrada','$hr_salida','$dia','$mes','$anio','$tipo_event','$id')");
        if ($ins) {
            return true;
        }else {
            return false;
        }
    } 

    public function regresoReser(){
        $query = "SELECT *, reserva.id_reserva as id_reservaciones,
                            usuarios.id as id_usuario,
                            reserva.nombre as nombre_cliente
                            FROM  reserva, usuarios
                            WHERE reserva.id_usuario = usuarios.id
                            ORDER BY reserva.id_reserva ASC;";
        return $this->db->resultquery($query);
    }

    public function borrarResrva($id){
        $del = $this->db->query("DELETE FROM reserva WHERE id_reserva = '$id' ");
        if ($del) {
            return true;
        }else {
            return false;
        }
    }  
}
?>