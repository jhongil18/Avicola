<?php
class tiendaDAO extends db{
   
    function __construct() {
        parent::__construct();
    }

    public function getMaxId($Table,$Column){
        $increment = 1;
    
	    $select = "SELECT MAX($Column) AS max_consecutive FROM $Table";
        $Max    = $this -> query($select);	  
        if(mysqli_num_rows($Max)>0){
            if($row = mysqli_fetch_assoc($Max)){
                $max_consecutive =  $row['max_consecutive'];
            }
        }else{
            $max_consecutive = 0;
        }
        return $max_consecutive += $increment;  
	}

    
    /******public function crearTienda(tiendaDTO $tienda){
         
        $nombre = $tienda->getNombre();
        $idProducto = $this->getMaxId('producto','idProducto');

        $select="SELECT tienda_id FROM tienda WHERE nombre = '$nombre'";
        $result=$this->query($select);

        if(mysqli_num_rows($result)>0){
            return 2;
        }else{

                $sql="INSERT INTO tienda (tienda_id,nombre) VALUES ($tienda_id,'$nombre')";
                
                $result=$this->query($sql);
                
                if($result>0){
                       return 1;
                }else{
                    throw new Exception("No se pudo crear la tienda, el motivo: ".$this->error);
                }
        }
    }*****/

    /***public function Actualizartienda(tiendaDTO $tienda){

        $tienda_id = $tienda->gettienda_id();
        $nombre = $tienda->getNombre();

                $update="UPDATE tienda SET nombre='$nombre' WHERE tienda_id=$tienda_id";
                $result=$this->query($update);
                
                if($result>0){
                        return 1;
                }else{
                    throw new Exception("No se pudo actualizar la tienda, el motivo: ".$this->error);
                }
        
    }***/


    /*****public function eliminartienda(tiendaDTO $tienda){

            $tienda_id = $tienda->gettienda_id();

            $select="SELECT tienda_id FROM tienda WHERE tienda_id = $tienda_id";
            $result=$this->query($select);

            if(mysqli_num_rows($result)>0){

                $sql="DELETE FROM tienda WHERE tienda_id=$tienda_id";
                $result=$this->query($sql);
                
                if($result>0){
                        return 1;
                }else{
                    throw new Exception("No se pudo eliminar la tienda, el motivo: ".$this->error);
                }

            }else{
                    throw new Exception("No se pudo eliminar la tienda ya que no existe, el motivo: ".$this->error);
            }
            
    }******/

    public function getProducto(){
        if($idProducto = $_REQUEST['idProducto'] > 0){
            $sql = "SELECT * FROM producto WHERE idProducto = $idProducto AND estado = 'A'"; // Consulto 
            $result = $this->query($sql);
            if (mysqli_num_rows($result) > 0){
                if($row = mysqli_fetch_assoc($result)){
                    $img = $row['img'];
                    $nombre = $row['nombre'];
                    $valor = $row['valor'];
                    $descripcion = $row['descripcion'];

                    $data[0]['img'] = $img;
                    $data[0]['nombre'] = $nombre;
                    $data[0]['valor'] = $valor;
                    $data[0]['descripcion'] = $descripcion;

                    return $data;
                };
            }

        }else{
            $sql = "SELECT * FROM producto WHERE estado = 'A'"; // Consulto todos productos para mostrarlos en productos.php
            $result = $this->query($sql);
            
            if (mysqli_num_rows($result) > 0){
                return $result;
            }
        }
    }    
}