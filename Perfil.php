<?php
require './valida-acceso.php';
$nombre= $_SESSION["datos-usuario"]["NOMBRE"];
$apellidos =$_SESSION["datos-usuario"]["APELLIDOS"];
$rol=$_SESSION["datos-usuario"]["ROL"];
$ced=$_SESSION["datos-usuario"]["CEDULA"];
$cel=$_SESSION["datos-usuario"]["TELEFONO"];
$correo=$_SESSION["datos-usuario"]["EMAIL"];
$user=$_SESSION["datos-usuario"]["USUARIO"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi Perfil</title>
    </head>
    <body>
        <div class="centro">
            <div class="hijo">
                <center>
                    <h1 class="a">Mi Perfil:</h1><br>
                    <h2>Datos Personales:</h2>
                    <p>Nombre: <?php echo $nombre; ?></p>
                    <p>Apellidos: <?php echo $apellidos; ?></p>
                    <p>Numero de cédula: <?php echo $ced; ?></p>
                    <p>correo <?php echo $correo; ?></p>
                    <p>Numero Telefonico <?php echo $cel; ?></p>
                    <p>Nombre de usuario: <?php echo $user; ?></p>
                </center>
            </div>
        </div>
        <?php
        ?>
    </body>
</html>
