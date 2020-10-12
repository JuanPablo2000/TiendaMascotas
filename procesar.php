<?php
include "./Clases/Usuario.php";/*control espacio*/
include './Clases/Articulos.php';
$accion=$_POST["accion"];
$articulo= new Articulos();
$usuario =new Usuario();
switch ($accion){
case "login":
    $resultado= $usuario->Login($_POST);
    break;
case "agregar-usuario":
    $resultado= $usuario->CrearUsuario($_POST);
    break;
case "buscar-usuario":
    $resultado=$usuario->CargarUsuario($_POST["cedula_busca"]);
    break;
case "buscar-user":
    $resultado=$usuario->CargarUser($_POST["cedula_busca"]);
    break;
case "elimina-usuario":
$resultado=$usuario->EliminarUsuario($_POST["cedula"]);
break;
case "busqueda-usuario":
    $resultado=$usuario->BuscarUsuario($_POST["cedula-buscar"]);
    break;
case "actualizar-usuario":
    $resultado=$usuario->ActualizarUsuario($_POST);
    break;
case "logout":
    session_start();
    session_destroy();
    header("Location:index.php");
    break;
case "agregar-producto":
    $resultado=$articulo->AgregarProducto($_POST);
    break;
case "buscar-producto":
    $resultado=$articulo->CargarProducto($_POST["codigo_busca"]);
    break;
case "buscar-articulo":
    $resultado=$articulo->BuscarArticulo($_POST["codigo_carga"]);
    break;
case "eliminar-producto":
$resultado=$articulo->EliminarProducto($_POST["codigo"]);
break;
case "busqueda-producto":
    $resultado=$articulo->BuscarProducto($_POST["codigo-buscar"]);
    break;
case "actualizar-producto":
    $resultado=$articulo->ActualizarProducto($_POST);
    break;
case "agregar-compra":
    $resultado=$compras->AgregarCompra($_POST);
    default :
    break;
}
echo json_encode($resultado);

