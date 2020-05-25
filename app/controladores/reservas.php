<?php
class Reservas extends Controlador{
    public function __construct(){
        if (!isset($_SESSION['id_usuario'])) {
            redirect('usuarios/login');
        }
        $this->modeloReserva = $this->modelo('modeloReserva');
    }
    public function index(){
        if (isset($_SESSION['id_usuario'])) {
            $reserva = $this->modeloReserva->regresoReser();
            $data = [
                'reserva' => $reserva
            ];
            $this->vista('reservas/index', $data);
        }
    }
    public function agregarReserva(){
        $this->vista('reservas/addReservas');
    }
    public function nuevaReserva(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        
        $data = [
            'empresa' => trim($_POST['empresa']),
            'telefono' => trim($_POST['telefono']),
            'nombre' => trim($_POST['nombre']),
            'apellido' => trim($_POST['apellido']),
            'cant_personas' => trim($_POST['cantPersonas']),
            'correo' => trim($_POST['correo']),
            'hospedaje' => trim($_POST['hospedaje']),
            'hr_entrada' => trim($_POST['horaEntrada']),
            'hr_salida' => trim($_POST['horaSalida']),
            'dia' => trim($_POST['dia']),
            'mes' => trim($_POST['mes']),
            'anio' => trim($_POST['año']),
            'tipo_evento' => trim($_POST['tipoEvento']),
            'id_usuario' => $_SESSION['id_usuario']
        ];

        if ($this->modeloReserva->addReservas($data)) {
            redirect('alertas/agrego_reserva');
        }else{
            die('No guardo la publicación');
        }
    }
    public function eliminarReserva($id){
        if ($this->modeloReserva->borrarResrva($id)) {
            redirect('alertas/elimino_reserva');
        }else {
            die('No se pudo eliminar la publicación.');
        }
    }

}
?>