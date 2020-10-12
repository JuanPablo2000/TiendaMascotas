<?php
class Articulos {

    private $ID;
    private $CODIGO;
    private $MARCA;
    private $DESCRIPCION;
    private $PRECIO;
    private $CANTIDAD;
    private $IMAGEN;
    
    function Articulos(){
        $this->ID = "";
        $this->CODIGO = "";
        $this->MARCA = "";
        $this->DESCRIPCION = "";
        $this->PRECIO = "";
        $this->CANTIDAD = "";
        $this->IMAGEN="";
    }

    function getIMAGEN() {
        return $this->IMAGEN;
    }

        
    function getID() {
        return $this->ID;
    }

    function getCODIGO() {
        return $this->CODIGO;
    }

    function getMARCA() {
        return $this->MARCA;
    }

    function getDESCRIPCION() {
        return $this->DESCRIPCION;
    }

    function getPRECIO() {
        return $this->PRECIO;
    }

    function getCANTIDAD() {
        return $this->CANTIDAD;
    }

    function setID($ID) {
        $this->ID = $ID;
    }

    function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    function setMARCA($MARCA) {
        $this->MARCA = $MARCA;
    }

    function setDESCRIPCION($DESCRIPCION) {
        $this->DESCRIPCION = $DESCRIPCION;
    }

    function setPRECIO($PRECIO) {
        $this->PRECIO = $PRECIO;
    }

    function setCANTIDAD($CANTIDAD) {
        $this->CANTIDAD = $CANTIDAD;
    }
 function AgregarProducto($datos) {
        require './BD/ConexionBD.php';
        $retorno = array();
        $query = "INSERT INTO tbarticulos(CODIGO,MARCA,DESCRIPCION,PRECIO,CANTIDAD,IMAGEN)";
        $query .= "VALUES('" . $datos["codigo"] . "','" . $datos["marca"] . "',";
        $query .= "'" . $datos["descripcion"] . "','" . $datos["precio"] . "',";
        $query .= "'" . $datos["cantidad"] . "','" .$datos["imagen"] ."')";

        //echo  $query;
        $resultado = $mysql->query($query);
        $id = $mysql->insert_id;

        if ($id > 0) {
            $retorno["valido"] = true;
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }
    
    function CargarProducto($codigo){
         require './BD/ConexionBD.php';
        $retorno = array();
        $query = "SELECT * FROM tbarticulos WHERE CODIGO='" . $codigo . "'";
        $resultado = $mysql->query($query);
        
         if ($resultado->num_rows > 0) {
            $retorno["valido"] = true;
            $producto = $resultado->fetch_assoc();
            
            $form_PRODUCTO = "";          
            $form_PRODUCTO  .= "<form id='EliminarProducto' name='EliminarProducto' method='post' action=''>";
            $form_PRODUCTO  .= "<p>";
            $form_PRODUCTO .= "<label>Codigo:</label>";
            $form_PRODUCTO .= "<input type='text' id='codigo' name='codigo' value='".$producto["CODIGO"]."' disabled>";
            $form_PRODUCTO .= "<input type='hidden' id='codigo' name='codigo' value='".$producto["CODIGO"]."' >";
            $form_PRODUCTO .= "</p>";
            $form_PRODUCTO .= "<p>";
            $form_PRODUCTO .= "<label>Marca:</label>";
            $form_PRODUCTO .= "<input type='text' name='marca' value='".$producto["MARCA"]."' disabled> ";
            $form_PRODUCTO .= "</p>";
            $form_PRODUCTO .= "<p>";
            $form_PRODUCTO .= "<label>Descripcion:</label>";
            $form_PRODUCTO .= "<input type='text' name='descripcion' value='".$producto["DESCRIPCION"]."' disabled>";
            $form_PRODUCTO .= "</p>";
            $form_PRODUCTO .= "<p>";
            $form_PRODUCTO.= " <label>Pecio:</label>";
            $form_PRODUCTO .= " <input type='text' name='precio' value='".$producto["PRECIO"]."' disabled>";
            $form_PRODUCTO .= "</p>";            
            $form_PRODUCTO .= "<p> ";
            $form_PRODUCTO .= "<input type='button' id='btnEliminarProducto' name='btnEliminarProducto' value='Eliminar Producto'>";
            $form_PRODUCTO .= "</p>";
            $form_PRODUCTO .= "</form>";
            $retorno["datos"] =  $form_PRODUCTO;
            
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }
    function BuscarArticulo($codigo){
         require './BD/ConexionBD.php';
        $retorno = array();
        $query = "SELECT * FROM tbarticulos WHERE CODIGO='" . $codigo . "'";
        $resultado = $mysql->query($query);
        
         if ($resultado->num_rows > 0) {
            $retorno["valido"] = true;
            $producto = $resultado->fetch_assoc();
            
            $form_PRODUCTO = "";          
            $form_PRODUCTO  .= "<form id='EliminarProducto' name='EliminarProducto' method='post' action=''>";
            $form_PRODUCTO  .= "<p>";
            $form_PRODUCTO .= "<label>Codigo:</label>";
            $form_PRODUCTO .= "<input type='text' id='codigo' name='codigo' value='".$producto["CODIGO"]."' disabled>";
            $form_PRODUCTO .= "<input type='hidden' id='codigo' name='codigo' value='".$producto["CODIGO"]."' >";
            $form_PRODUCTO .= "</p>";
            $form_PRODUCTO .= "<p>";
            $form_PRODUCTO .= "<label>Marca:</label>";
            $form_PRODUCTO .= "<input type='text' name='marca' value='".$producto["MARCA"]."' disabled> ";
            $form_PRODUCTO .= "</p>";
            $form_PRODUCTO .= "<p>";
            $form_PRODUCTO .= "<label>Descripcion:</label>";
            $form_PRODUCTO .= "<input type='text' name='descripcion' value='".$producto["DESCRIPCION"]."' disabled>";
            $form_PRODUCTO .= "</p>";
            $form_PRODUCTO .= "<p>";
            $form_PRODUCTO.= " <label>Pecio:</label>";
            $form_PRODUCTO .= " <input type='text' name='precio' value='".$producto["PRECIO"]."' disabled>";
            $form_PRODUCTO .= "</p>";            
            $form_PRODUCTO .= "</form>";
            $retorno["datos"] =  $form_PRODUCTO;
            
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }
    function EliminarProducto($Codigo) {
        require './BD/ConexionBD.php';

        $query = "DELETE FROM tbarticulos WHERE CODIGO='" . $Codigo . "'";
        $resultado = $mysql->query($query);
        if ($mysql->affected_rows > 0) {
            $retorno["valido"] = true;
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }

    
    
 function ListarProductos() {
        require './BD/ConexionBD.php';
        $retorno = array();
        $query = "SELECT * FROM tbarticulos";
        $resultado = $mysql->query($query);

        if ($resultado->num_rows > 0) {
            $productos_array = array();
            while ($productos = $resultado->fetch_assoc()) {
                array_push($productos_array, $productos);
            }
            $retorno["valido"] = true;
            $retorno["datos"] = $productos_array;
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }
    
    function BuscarProducto($codigo){
         require './BD/ConexionBD.php';
        $retorno = array();
        $query = "SELECT * FROM tbarticulos WHERE CODIGO='" . $codigo . "'";
        $resultado = $mysql->query($query);
        
         if ($resultado->num_rows > 0) {
            $retorno["valido"] = true;
            $producto = $resultado->fetch_assoc();
            
            $form_PRODUCTO = "";          
            $form_PRODUCTO  .= "<form id='BuscarProducto' name='BuscarProducto' method='post' action=''>";
            $form_PRODUCTO  .= "<p>";
            $form_PRODUCTO .= "<label>Codigo:</label>";
            $form_PRODUCTO .= "<input type='text' id='codigo' name='codigo' value='".$producto["CODIGO"]."' disabled>";
            $form_PRODUCTO .= "<input type='hidden' id='codigo' name='codigo' value='".$producto["CODIGO"]."' >";
            $form_PRODUCTO .= "</p>";
            $form_PRODUCTO .= "<p>";
            $form_PRODUCTO .= "<label>Marca:</label>";
            $form_PRODUCTO .= "<input type='text' name='marca' value='".$producto["MARCA"]."' disabled> ";
            $form_PRODUCTO .= "</p>";
            $form_PRODUCTO .= "<p>";
            $form_PRODUCTO .= "<label>Descripcion:</label>";
            $form_PRODUCTO .= "<input type='text' name='descripcion' value='".$producto["DESCRIPCION"]."' disabled>";
            $form_PRODUCTO .= "</p>";
            $form_PRODUCTO .= "<p>";
            $form_PRODUCTO.= " <label>Pecio:</label>";
            $form_PRODUCTO .= " <input type='text' name='precio' value='".$producto["PRECIO"]."' disabled>";
            $form_PRODUCTO .= "</p>";            
            $form_PRODUCTO .= "</form>";
            $retorno["datos"] =  $form_PRODUCTO;
            
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }
}
