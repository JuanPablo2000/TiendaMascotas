<?php
class Compras {

    private $ID_COMPRA;
    private $CEDULA;
    private $ID_ARTICULO;
    private $NUM_FACTURA;
    private $FECHA_COMPRA;
    private $CANTIDAD;

    
    function Compras(){
        $this->ID = "";
        $this->CEDULA= "";
        $this->ID_ARTICULO = "";
        $this->NUM_FACTURA= "";
        $this->FECHA_COMPRA= "";
        $this->CANTIDAD = "";
    }

    function getID_COMPRA() {
        return $this->ID_COMPRA;
    }

    function getCEDULA() {
        return $this->CEDULA;
    }

    function getID_ARTICULO() {
        return $this->ID_ARTICULO;
    }

    function getNUM_FACTURA() {
        return $this->NUM_FACTURA;
    }

    function getFECHA_COMPRA() {
        return $this->FECHA_COMPRA;
    }

    function getCANTIDAD() {
        return $this->CANTIDAD;
    }

    function setID_COMPRA($ID_COMPRA) {
        $this->ID_COMPRA = $ID_COMPRA;
    }

    function setCEDULA($CEDULA) {
        $this->CEDULA = $CEDULA;
    }

    function setID_ARTICULO($ID_ARTICULO) {
        $this->ID_ARTICULO = $ID_ARTICULO;
    }

    function setNUM_FACTURA($NUM_FACTURA) {
        $this->NUM_FACTURA = $NUM_FACTURA;
    }

    function setFECHA_COMPRA($FECHA_COMPRA) {
        $this->FECHA_COMPRA = $FECHA_COMPRA;
    }

    function setCANTIDAD($CANTIDAD) {
        $this->CANTIDAD = $CANTIDAD;
    }

     //HAY QUE AGREGAR LA PAGINA PARA VERLO
     function AgregarCompra($datos) {
        require './BD/ConexionBD.php';
        $retorno = array();
        $query = "INSERT INTO tbfactura(ID_COMPRA,CEDULA_FK,ID_ARTICULO,NUMERO_FAC,FECHA_COM,CANTIDAD)";
        $query .= "VALUES('" . $datos["id"] . "','" . $datos["cedula"] . "',";
        $query .= "'" . $datos["id_articulo"] . "','" . $datos["num_factura"] . "',";
        $query .= "'" . $datos["fecha"] . "','" .$datos["cantidad"] ."')";

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
    
    //HAY QUE AGREGAR LA PAGINA PARA VERLO
    ///ES SOLO PARA BUSCAR LA COMPRA
    function CargarCompra($Num_Factura){
         require './BD/ConexionBD.php';
        $retorno = array();
        $query = "SELECT * FROM tbfactura WHERE ID_COMPRA='" . $Num_Factura . "'";
        $resultado = $mysql->query($query);
        
         if ($resultado->num_rows > 0) {
            $retorno["valido"] = true;
            $compra = $resultado->fetch_assoc();
            
            $form_compras = "";          
            $form_compras  .= "<form id='BuscarCompra' name='BuscarCompra' method='post' action=''>";
            $form_compras  .= "<p>";
            $form_compras .= "<label>Id:</label>";
            $form_compras .= "<input type='text' id='codigo' name='codigo' value='".$compra["ID_COMPRA"]."' disabled>";
            $form_compras .= "<input type='hidden' id='codigo' name='codigo' value='".$compra["ID_COMPRA"]."' >";
            $form_compras .= "</p>";
            $form_compras .= "<p>";
            $form_compras .= "<label>Cedula:</label>";
            $form_compras .= "<input type='text' name='marca' value='".$compra["CEDULA_FK"]."' disabled> ";
            $form_compras .= "</p>";
            $form_compras .= "<p>";
            $form_compras .= "<label>Id Articulo:</label>";
            $form_compras .= "<input type='text' name='descripcion' value='".$compra["ID_ARTICULO"]."' disabled>";
            $form_compras .= "</p>";
            $form_compras .= "<p>";
            $form_compras .= "<label>Descripcion:</label>";
            $form_compras .= "<input type='text' name='descripcion' value='".$compra["NUMERO_FAC"]."' disabled>";
            $form_compras .= "</p>";
            $form_compras .= "<p>";
            $form_compras.= " <label>Pecio:</label>";
            $form_compras .= " <input type='text' name='precio' value='".$compra["FECHA_COM"]."' disabled>";
            $form_compras .= "</p>";  
            $form_compras .= "<p>";
            $form_compras.= " <label>Pecio:</label>";
            $form_compras .= " <input type='text' name='precio' value='".$compra["CANTIDAD"]."' disabled>";
            $form_compras .= "</p>";  
            $form_compras .= "</form>";
            $retorno["datos"] =  $form_compras;
            
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }
    
    //HAY QUE AGREGAR LA PAGINA PARA VERLO
 function ListarProductos() {
        require './BD/ConexionBD.php';
        $retorno = array();
        $query = "SELECT * FROM tbfactura";
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
}
