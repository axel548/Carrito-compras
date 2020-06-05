<?php
class Utils extends Controlador{
    public function __construct(){
       
    } 
    public static function statsCarrito(){
        $stats = array(
            'count' => 0,
            'total' => 0
        );
        if (isset($_SESSION['carrito'])) {
            $stats['count'] = count($_SESSION['carrito']);
            foreach ($_SESSION['carrito'] as $indice => $elemento) {
                foreach ($elemento['productos'] as $producto) {
                    $stats['total'] += $producto->precio*$elemento['unidades'];
                }
            }
        }
        return $stats;
    }
    public static function isIdentity(){
        if (!isset($_SESSION['id_usuario'])) {
            header("Location:".RUTAPUBLIC);
        }else{
            return true;
        }
    }
}
?>