<?php
class tiendaDAO extends db{
   
    function __construct() {
        parent::__construct();
    }

    // Funcion Que Obtiene El Max_consecutive
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

    public function getProducto($idProducto = null){
        
        if($idProducto > 0){
            $sql = "SELECT * FROM producto WHERE idProducto = $idProducto AND estado = 'A'";
            $result = $this->query($sql);
            if (mysqli_num_rows($result) > 0){
                if($row = mysqli_fetch_assoc($result)){
                    $idProducto = $row['idProducto'];
                    $img = $row['img'];
                    $nombre = $row['nombre'];
                    $valor = $row['valor'];
                    $descripcion = $row['descripcion'];

                    $data[0]['idProducto'] = $idProducto;
                    $data[0]['img'] = $img;
                    $data[0]['nombre'] = $nombre;
                    $data[0]['valor'] = $valor;
                    $data[0]['descripcion'] = $descripcion;

                    return $data;
                };
            }

        // Consulto Todos Productos Para Mostrarlos En Productos.php
        }else{
            $sql = "SELECT * FROM producto WHERE estado = 'A'";
            $result = $this->query($sql);
            
            if (mysqli_num_rows($result) > 0){
                return $result;
            }
        }
    }
    
    public function setCarrito($idProducto = null){

        if($idProducto > 0){
            $select = "SELECT * FROM compra WHERE estado = 'A'";
            $result = $this->query($select);
            // Inserto Compra
            if (mysqli_num_rows($result) > 0){
                if($row = mysqli_fetch_assoc($result)){
                    $estado = $row['estado'];
                    
                    if($estado != 'A' or ''){
                        $idCompra = $this -> getMaxId('compra','idCompra');
                        $fecha = date('Y-m-d h:i:s');
                        $insert = "INSERT INTO compra (idCompra, fechaCompra, valor, estado) VALUES ($idCompra, '$fecha', '0', 'A')";
                        $result = $this->query($insert);
                    
                    }else{
                        $idCompra = $row['idCompra'];
                    }
                }

            // Inserto Compra Si No Existen
            }else{
                $idCompra = $this -> getMaxId('compra','idCompra');
                $fecha = date('Y-m-d h:i:s');
                $insert = "INSERT INTO compra (idCompra, fechaCompra, valor, estado) VALUES ($idCompra, '$fecha', '0', 'A')";
                $result = $this->query($insert);
            }

            // Inserto Detalles De Compra
            if($result){
                $id_detalleCompra = $this -> getMaxId('detallecompra','id_detalleCompra');
                
                $insert = "INSERT INTO detallecompra (id_detalleCompra, idProducto, idCompra, cantidad, valor, total) 
                VALUES ($id_detalleCompra, $idProducto, $idCompra, '0', '0', '0')";
                $result = $this->query($insert);

                if($result > 0){
                    return $idCompra;
                }else{
                    throw new Exception("No se pudo insertar el detalle de la compra: ".$this->error);    
                }
            }else{
                throw new Exception("No se pudo insertar la compra: ".$this->error);    
            }

        // Consulto El Producto Para Mostrar En carritoCompras.php
        }else{
            $id = $this -> getMaxId('detallecompra','id_detalleCompra');
            $id_detalleCompra = $id - 1;

            $select = "SELECT p.*,
                              d.id_detalleCompra AS id_detalleCompra 
                       FROM detallecompra d, producto p, compra c 
                       WHERE d.idProducto = p.idproducto AND d.idCompra = c.idCompra AND c.estado = 'A'";
            $result = $this->query($select);

            if(mysqli_num_rows($result) > 0){
                return $result;
            }else{
                throw new Exception("Error en el select: ".$this->error);    
            }
        }
    }

    // Finalizo Compra
    public function updateCompra($idCompra,$idProducto,$valor,$cantidad,$total){
        if($idCompra > 0){
            $update = "UPDATE compra SET estado = 'F', valor = $total WHERE idCompra = $idCompra";
            $result = $this->query($update);

            $update = "UPDATE detallecompra SET cantidad = $cantidad, valor = $valor, total = $total
                       WHERE idCompra = $idCompra";
            $result = $this->query($update);

            return $result;
        }else{
            throw new Exception("No se pudo actualizar la compra: ".$this->error); 
        }
    }

    // Elimino El DetalleCompra
    public function deletedetalleCompra($id_detalleCompra){
        if($id_detalleCompra > 0){
            $delete = "DELETE FROM detallecompra WHERE id_detalleCompra = $id_detalleCompra";
            $result = $this->query($delete);
            
            return $result;
        }else{
            throw new Exception("No se pudo eliminar el detalleCompra: ".$this->error);
        }
    }
}