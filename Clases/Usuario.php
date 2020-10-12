<?php
class Usuario {

    //Jquery >> progra orientada a objetos
    /* ATRIBUTOS */
    //ATRIBUTOS COORESSPONDEN ALOS ATRIBUTOS DE LA TABLA EN bd

    private $ID;
    private $CEDULA;
    private $ROL;
    private $NOMBRE;
    private $APELLIDOS;
    private $TELEFONO;
    private $EMAIL;
    private $USUARIO;
    private $PASSWORD;

    /* CONSTRUCTOR */

    //funciones en clases == metodos
    function Usuario( ) {
        $this->ID = "";
        $this->CEDULA = "";
        $this->ROL = "";
        $this->NOMBRE = "";
        $this->APELLIDOS = "";
        $this->TELEFONO = "";
        $this->EMAIL = "";
        $this->USUARIO = "";
        $this->PASSWORD = "";
    }

        /* METODOS GET Y SET */

    //Generar metodos GET
    function getID() {
        return $this->ID;
    }

    function getCEDULA() {
        return $this->CEDULA;
    }

    function getROL() {
        return $this->ROL;
    }

    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function getAPELLIDOS() {
        return $this->APELLIDOS;
    }

    function getTELEFONO() {
        return $this->TELEFONO;
    }

    function getEMAIL() {
        return $this->EMAIL;
    }

    function getUSUARIO() {
        return $this->USUARIO;
    }

    function getPASSWORD() {
        return $this->PASSWORD;
    }

    
    /* METODOS DE LA CLASE */
   
    /* Iniciar Sesion */
    function Login($datos) {
        require "./BD/ConexionBD.php";
        $retorno = array();

        $query = "SELECT * FROM tbusuario WHERE USUARIO='";
        $query .= $datos["usuario"] . "'AND PASSWORD='" . $datos["contrasena"] . "'";

        $resultado = $mysql->query($query);

        if ($resultado->num_rows > 0) {
            $retorno["valido"] = true;
            //$retorno["datos"]= $resultado->fetch_assoc();

            session_start();
            $_SESSION["datos-usuario"] = $resultado->fetch_assoc();
            //  var_dump($Usuario);/*muestra los elementos de una variable arreglo*/
            //Abrir sesion
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }

 /* Crear Un nuevo Usuario */
    function CrearUsuario($datos) {
        require './BD/ConexionBD.php';
        $retorno = array();
        $query = "INSERT INTO tbusuario(CEDULA,ROL,NOMBRE,APELLIDOS,TELEFONO,EMAIL,USUARIO,PASSWORD)";
        $query .= "VALUES('" . $datos["cedula"] . "','" . $datos["rol"] . "',";
        $query .= "'" . $datos["nombre"] . "','" . $datos["apellidos"] . "',";
        $query .= "'" . $datos["telefono"] . "','" . $datos["email"] . "',";
        $query .= "'" . $datos["usuario"] . "','" . $datos["contrasena"] . "')";

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
    function CargarUsuario($cedula){
         require './BD/ConexionBD.php';
        $retorno = array();
        $query = "SELECT * FROM tbusuario WHERE CEDULA='" . $cedula . "'";
        $resultado = $mysql->query($query);
        
         if ($resultado->num_rows > 0) {
            $retorno["valido"] = true;
            $usuario = $resultado->fetch_assoc();
            
            $selec_admin = $usuario["ROL"] == "Admin" ? "selected" : ""; /* IF CORTO */
            $selec_cliente = $usuario["ROL"] == "User" ? "selected" : "";

            $form_usuario = "";          
            $form_usuario .= "<form id='EliminarUsuario' name='EliminarUsuario' method='post' action=''>";
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Cedula:</label>";
            $form_usuario .= "<input type='text' id='cedula' name='cedula' value='".$usuario["CEDULA"]."' disabled>";
            $form_usuario .= "<input type='hidden' id='cedula' name='cedula' value='".$usuario["CEDULA"]."' >";
            $form_usuario .= "</p>";
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Nombre:</label>";
            $form_usuario .= "<input type='text' name='nombre' value='".$usuario["NOMBRE"]."' disabled> ";
            $form_usuario .= "</p>";
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Apellidos:</label>";
            $form_usuario .= "<input type='text' name='apellidos' value='".$usuario["APELLIDOS"]."' disabled>";
            $form_usuario .= "</p>";
            $form_usuario .= "<p>";
            $form_usuario .= " <label>Usuario:</label>";
            $form_usuario .= " <input type='text' name='usuario' value='".$usuario["USUARIO"]."' disabled>";
            $form_usuario .= "</p>";            
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Tipo de usuario</label>";
            $form_usuario .= "<select name='rol' disabled>";
            $form_usuario .= "<option value='Admin' ".$selec_admin.">Administrador</option>";
            $form_usuario .= "<option value='User' ".$selec_cliente.">Cliente</option>";
            $form_usuario .= "</select> ";
            $form_usuario .= "</p>";
            $form_usuario .= "<p> ";
            $form_usuario .= "<input type='button' id='btnEliminarUsuario' name='btnEliminarUsuario' value='Eliminar usuario'>";
            $form_usuario .= "</p>";
            $form_usuario .= "</form>";
             $retorno["datos"] = $form_usuario;
            
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }
 function CargarUser($cedula){
         require './BD/ConexionBD.php';
        $retorno = array();
        $query = "SELECT * FROM tbusuario WHERE CEDULA='" . $cedula . "'";
        $resultado = $mysql->query($query);
        
         if ($resultado->num_rows > 0) {
            $retorno["valido"] = true;
            $usuario = $resultado->fetch_assoc();
            
            $selec_admin = $usuario["ROL"] == "Admin" ? "selected" : ""; /* IF CORTO */
            $selec_cliente = $usuario["ROL"] == "User" ? "selected" : "";

            $form_usuario = "";          
            $form_usuario .= "<form id='EliminarUsuario' name='EliminarUsuario' method='post' action=''>";
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Cedula:</label>";
            $form_usuario .= "<input type='text' id='cedula' name='cedula' value='".$usuario["CEDULA"]."' disabled>";
            $form_usuario .= "<input type='hidden' id='cedula' name='cedula' value='".$usuario["CEDULA"]."' >";
            $form_usuario .= "</p>";
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Nombre:</label>";
            $form_usuario .= "<input type='text' name='nombre' value='".$usuario["NOMBRE"]."' disabled> ";
            $form_usuario .= "</p>";
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Apellidos:</label>";
            $form_usuario .= "<input type='text' name='apellidos' value='".$usuario["APELLIDOS"]."' disabled>";
            $form_usuario .= "</p>";
            $form_usuario .= "<p>";
            $form_usuario .= " <label>Usuario:</label>";
            $form_usuario .= " <input type='text' name='usuario' value='".$usuario["USUARIO"]."' disabled>";
            $form_usuario .= "</p>";            
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Tipo de usuario</label>";
            $form_usuario .= "<select name='rol' disabled>";
            $form_usuario .= "<option value='Admin' ".$selec_admin.">Administrador</option>";
            $form_usuario .= "<option value='User' ".$selec_cliente.">Cliente</option>";
            $form_usuario .= "</select> ";
            $form_usuario .= "</p>";
            $form_usuario .= "</form>";
             $retorno["datos"] = $form_usuario;
            
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }
/*Eliminar usuario*/
    function EliminarUsuario($cedula) {
        require './BD/conexionbd.php';

        $query = "DELETE FROM tbusuario WHERE CEDULA='" . $cedula . "'";
        $resultado = $mysql->query($query);
        if ($mysql->affected_rows > 0) {
            $retorno["valido"] = true;
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }

/*Buscar Usuario*/
    function BuscarUsuario($cedula) {
        require './BD/ConexionBD.php';
        $retorno = array();
        $query = "SELECT * FROM tbusuario WHERE CEDULA='" . $cedula . "'";
        $resultado = $mysql->query($query);

        if ($resultado->num_rows > 0) {
            $retorno["valido"] = true;
            $retorno["datos"] = $resultado->fetch_assoc();
        } else {
            $retorno["valido"] = false;
        }return $retorno;
    }

/*Actualizar Usuarios*/
    function ActualizarUsuario($datos) {
        require './BD/ConexionBD.php';
        $retorno = array();

        $query = "UPDATE tbusuario SET ";
        $query .= "CEDULA='" . $datos["cedula"] . "',";
        $query .= "ROL='" . $datos["rol"] . "',";
        $query .= "NOMBRE='" . $datos["nombre"] . "',";
        $query .= "APELLIDOS='" . $datos["apellidos"] . "',";
        $query .= "TELEFONO='" . $datos["telefono"] . "',";
        $query .= "EMAIL='" . $datos["email"] . "',";
        $query .= "USUARIO='" . $datos["usuario"] . "'";
        $query .= "WHERE CEDULA ='" . $datos["cedula"] . "'";
            //echo $query;
        $resultado = $mysql->query($query);

        if ($mysql->affected_rows > 0) {
            $retorno["valido"] = true;
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }

/*Listar Usuarios*/
    function ListarUsuarios() {
        require './BD/conexionbd.php';
        $retorno = array();
        $query = "SELECT * FROM tbusuario";
        $resultado = $mysql->query($query);

        if ($resultado->num_rows > 0) {
            $usuarios_array = array();
            while ($usuario = $resultado->fetch_assoc()) {
                array_push($usuarios_array, $usuario);
            }
            $retorno["valido"] = true;
            $retorno["datos"] = $usuarios_array;
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }
    
    //FUNCION BUSCAR HAY QUE AGREGAR LA PAGINA PARA VERLO
    //SE BUSCA POR CEDULA
    //IGUAL QUE PARA ELIMINAR
    //NO HAY BOTON PORQUE NO HAY QUE HACER NADA
    function BusquedaUsuario($cedula){
         require './BD/ConexionBD.php';
        $retorno = array();
        $query = "SELECT * FROM tbusuario WHERE CEDULA='" . $cedula . "'";
        $resultado = $mysql->query($query);
        
         if ($resultado->num_rows > 0) {
            $retorno["valido"] = true;
            $usuario = $resultado->fetch_assoc();
            
            $selec_admin = $usuario["ROL"] == "Admin" ? "selected" : ""; /* IF CORTO */
            $selec_cliente = $usuario["ROL"] == "User" ? "selected" : "";

            $form_usuario = "";          
            $form_usuario .= "<form id='BuscarUsuario' name='BuscarUsuario' method='post' action=''>";
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Cedula:</label>";
            $form_usuario .= "<input type='text' id='cedula' name='cedula' value='".$usuario["CEDULA"]."' disabled>";
            $form_usuario .= "<input type='hidden' id='cedula' name='cedula' value='".$usuario["CEDULA"]."' >";
            $form_usuario .= "</p>";
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Nombre:</label>";
            $form_usuario .= "<input type='text' name='nombre' value='".$usuario["NOMBRE"]."' disabled> ";
            $form_usuario .= "</p>";
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Apellidos:</label>";
            $form_usuario .= "<input type='text' name='apellidos' value='".$usuario["APELLIDOS"]."' disabled>";
            $form_usuario .= "</p>";
            $form_usuario .= "<p>";
            $form_usuario .= " <label>Usuario:</label>";
            $form_usuario .= " <input type='text' name='usuario' value='".$usuario["USUARIO"]."' disabled>";
            $form_usuario .= "</p>";            
            $form_usuario .= "<p>";
            $form_usuario .= "<label>Tipo de usuario</label>";
            $form_usuario .= "<select name='rol' disabled>";
            $form_usuario .= "<option value='Admin' ".$selec_admin.">Administrador</option>";
            $form_usuario .= "<option value='User' ".$selec_cliente.">Cliente</option>";
            $form_usuario .= "</select> ";
            $form_usuario .= "</p>";
            $form_usuario .= "</form>";
             $retorno["datos"] = $form_usuario;
            
        } else {
            $retorno["valido"] = false;
        }
        return $retorno;
    }

}