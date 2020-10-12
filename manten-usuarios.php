<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mantenimiento de Usuarios</title>
        <link href="CSS/manten-usuarios.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <div class="centro">
            <div class="hijo">
                <a href="menu-principal.php" class="imagen">
                    <img src="images/pchuella.jpg" alt="" width="50px" height="50px"/>
                    </a>
                <h1 class="a">Mantenimiento de Usuarios</h1>
                <div class="b">
                    <button class="button" onclick="window.location='agregar-usuario.php'">Agregar Usuario</button>
                </div>
                &nbsp;
                <div class="b">
                    <button class="button" onclick="window.location='eliminar-usuario.php'">Eliminar Usuario</button>
                </div>
                &nbsp;
                <div class="b">
                   <button class="button" onclick="window.location='editar-usuario.php'">Modificar Usuario</button>
                </div>
                &nbsp;
                <div class="b">
                   <button class="button" onclick="window.location='Buscar-usuario.php'">Buscar Usuario</button>
                </div>
                &nbsp;
                <div class="b">
                    <button class="button" onclick="window.location='listar-usuarios.php'">Ver todos los Usuarios</button>
                </div>
            </div>
        </div>
        <?php
        
        ?>
    </body>
</html>
