<?php
require './valida-acceso.php';
$nombre= $_SESSION["datos-usuario"]["NOMBRE"];
$apellidos =$_SESSION["datos-usuario"]["APELLIDOS"];
$rol=$_SESSION["datos-usuario"]["ROL"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menú Principal</title>
        <link href="css/menuprincipal.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <div class="centro">
                <div class="hijo">
                    <center>
                    <h1 class="a">Menú Principal</h1>
                    <h2>Bienvenido/a <?php echo $nombre . " " . $apellidos; ?></h2>
                    <h4>Rol: <?php echo $rol; ?></h4>
                    <section>
                        <?php if ($rol == "Admin") { ?>
                            <p><button class="button" onclick="window.location='manten-usuarios.php'">Mantenimiento Usuarios</button></p>
                            <p><button class="button" onclick="window.location='manten-articulos.php'">Mantenimiento Artículos</button></p>
                             <p><button class="button" onclick="window.location='manten-compras.php'">Mantenimiento Compras</button></p>
                        <?php } else { ?>

                            <?php header('Location:Menu-cliente.php');
                        } ?>
                    </section>
                    <div>
                        <form id="frmLogout" name="frmLogout" method="post" action="procesar.php">
                            <input type="hidden" name="accion" value="logout">
                            <input type="submit" name="btnLogout" value="Cerrar Sesion">
                        </form>
                    </div>
                    </center>
                </div>
            </div>
            <?php
        ?>
    </body>
</html>
