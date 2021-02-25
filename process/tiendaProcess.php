<?php
require("../class/db.class.php");
require("../class/tiendaDAO.php");

class producto{
    function __construct(){
        $funcion = $_REQUEST['FUNCION'];
        $this -> $funcion();
    }

    private function vistaProducto(){
        try{
            $tiendaDAO = new tiendaDAO();
            $idProducto = filter_input(INPUT_POST,"idProducto",FILTER_SANITIZE_STRING); // Obtengo el id

            $result = $tiendaDAO -> getProducto($idProducto);
            if($result > 0){
                echo json_encode($result);
            }

        }catch(Exception $ex){
			echo "Ha sucedido el siguiente error: ".$ex->getMessage();
		}
    }

    private function insertCarrito(){
        $tiendaDAO = new tiendaDAO();
        $idProducto = filter_input(INPUT_POST,"idProducto",FILTER_SANITIZE_STRING);
        $result = $tiendaDAO -> setCarrito($idProducto);

        if($result > 0){
            echo json_encode($result);
        }
    }
}
$producto = new producto();
?>