<?php 
include './Clases/Usuario.php';
/*require './valida-acceso.php';*/
$usuario=new Usuario();
$resultado = $usuario->ListarUsuarios();
$mensaje="";
if ($resultado["valido"]) {
    
}else{
    $mensaje="No se encontraron registros.";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuarios</title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="css/listar-usuarios.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <section>
            <center>
                <a href="manten-usuarios.php" class="imagen">
                    <img src="images/pchuella.jpg" alt="" width="50px" height="50px"/>
                </a>
                <h1 class="a">Usuarios</h1>
            </center>
            <div class="columna">
                <?php
                if ($resultado["valido"]) {
                    foreach ($resultado["datos"] as $usuario) {
                        echo "<div class='item'>";
                        echo "<p><strong>Cedula:</strong>" . $usuario["CEDULA"] . "</p>";
                        echo "<p><strong>Nombre:</strong>" . $usuario["NOMBRE"] . "</p>";
                        echo "<p><strong>Apellidos:</strong>" . $usuario["APELLIDOS"] . "</p>";
                        echo "<p><strong>Usuario:</strong>" . $usuario["USUARIO"] . "</p>";
                        echo "<p><strong>Rol:</strong>" . $usuario["ROL"] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='item'>";
                    echo"<p>No se encontraron registros</p>";
                    echo"</div>";
                }
                ?>
            </div>
        </section>
        <?php
        // put your code here
        ?>
    </body>
</html>
