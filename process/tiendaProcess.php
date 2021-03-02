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
        try{
            $tiendaDAO = new tiendaDAO();
            $idProducto = filter_input(INPUT_POST,"idProducto",FILTER_SANITIZE_STRING);
            $result = $tiendaDAO -> setCarrito($idProducto);
            
            if($result > 0){
                echo json_encode($result);
            }

        }catch(Exception $ex){
            echo "Ha sucedido el siguiente error: ".$ex->getMessage();
        }
    }

    private function finalizarCompra(){
        try{
            $tiendaDAO = new tiendaDAO();
            $idCompra = filter_input(INPUT_POST,"idCompra",FILTER_SANITIZE_STRING);
            $idProducto = filter_input(INPUT_POST,"idProducto",FILTER_SANITIZE_STRING);
            $valor = filter_input(INPUT_POST,"valor",FILTER_SANITIZE_STRING);
            $cantidad = filter_input(INPUT_POST,"cantidad",FILTER_SANITIZE_STRING);
            $total = filter_input(INPUT_POST,"total",FILTER_SANITIZE_STRING);
            
            $result = $tiendaDAO -> updateCompra($idCompra,$idProducto,$valor,$cantidad,$total);

            if($result){
               echo json_encode($result);
            }

        }catch(Exception $ex){
            echo "Ha sucedido el siguiente error: ".$ex->getMessage();
        }
    }

    private function eliminarDetalleCompra(){
        try{
            $tiendaDAO = new tiendaDAO();
            $id_detalleCompra = filter_input(INPUT_POST,"id_detalleCompra",FILTER_SANITIZE_STRING);
            $result = $tiendaDAO -> deletedetalleCompra($id_detalleCompra);

            if($result > 0){
                exit($result);
                echo json_encode($result);
            }

        }catch(Exception $ex){
            echo "Ha sucedido el siguiente error: ".$ex->getMessage();
        }
    }
}
$producto = new producto();
?>