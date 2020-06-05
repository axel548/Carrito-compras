<?php
class Carrito extends Controlador{
    public function __construct(){
        $this->Helpers = $this->modelo('Helpers');
    } 
    public function index(){
        $this->vista('carritoCompras/index');
    }
    public function add($id){
        $id_producto = $id;
        /* Añadir más productos */
        if(isset($_SESSION['carrito'])){
            $counter = 0;
            foreach ($_SESSION['carrito'] as $indice => $elemento) {
                if ($elemento['id_producto'] == $id_producto) {
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $counter++;
                }
            }
        }
        /* Primer Producto */
        if (!isset($counter) || $counter == 0) {
            //conseguir Producto
            $getProduc = $this->Helpers->getProduct($id_producto);
            //Añadir al carrito
            $_SESSION['carrito'][] = array(
                "id_producto" => $id_producto,
                "productos" => $getProduc,
                "unidades" => 1
            );  
        }
        redirect("Carrito/index");
    }
    public function remove($id){
        $index = $id;
        unset($_SESSION['carrito'][$index]);
        redirect("Carrito/index");
    }
    public function delete_all(){
        unset($_SESSION['carrito']);
        redirect("Carrito/index");
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
    public function minus($id){
        $index = $id;
        $_SESSION['carrito'][$index]['unidades']--;
        if ($_SESSION['carrito'][$index]['unidades'] == 0) {
            unset($_SESSION['carrito'][$index]);
        }
        redirect("Carrito/index");
    }
    public function plus($id){
        $index = $id;
        $_SESSION['carrito'][$index]['unidades']++;
        redirect("Carrito/index");
    }
}
?>