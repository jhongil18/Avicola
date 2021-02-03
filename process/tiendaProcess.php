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
            $idProducto = filter_input(INPUT_POST,"idProducto",FILTER_SANITIZE_STRING); // Obtengo el id

            $tiendaDAO = new tiendaDAO();

            $result = $tiendaDAO -> getProducto(); // Inserto en la variable $result La funcion de getProducto
            if($result > 0){
                echo json_encode($result);
            }

        }catch(Exception $ex){
			echo "Ha sucedido el siguiente error: ".$ex->getMessage();
		}
    }
}
$producto = new producto();
?>