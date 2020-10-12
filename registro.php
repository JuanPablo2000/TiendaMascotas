<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <link href="css/registrocss.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
        <script src="JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="JS/Plugins/Messi/dist/messi.js" type="text/javascript"></script>
        <script src="JS/Plugins/Messi/dist/messi.min.js" type="text/javascript"></script>
        <link href="JS/Plugins/Messi/dist/messi.css" rel="stylesheet" type="text/css"/>
         <script src="JS/Scripts/Usuario.js" type="text/javascript"></script>
    </head>
    <body>
        <section id="Registro-form">
            <h1>Registro de Usuario</h1>
            <form id="frmregistro" name="frmregistro" method="post" action="procesar.php">
                <div class="bloque1">
                <p>
                <input type="text" name="cedula" value="" placeholder="Cedula">
                </p>
                <p>
                <input type="text" name="nombre" value="" placeholder="Nombre">
                </p>
                <p>
                <input type="text" name="apellidos" value="" placeholder="Apellidos">
                </p>
                <p>
                    <select name="rol">
                        <option value="User">Usuario</option>
                    </select>
                </p>
                </div>
                <div class="bloque2">
                <p>
                <input type="tel" name="telefono" value="" placeholder="Numero Telefonico">
                </p>
                <p>
                <input type="email" name="email" value="" placeholder="Correo Electronico">
                </p>
                 <p>
                     <input type="text" name="usuario" value="" placeholder="Nombre de usuario">
                </p>
                 <p>
                     <input type="password" name="contrasena" value="" placeholder="Contrasena">
                 </p>
                </div>  
                <div class="btn">
                <p>
                    <input id="btn_registro" type="button" name="btn_registro" value="Registrarme">
                    </p>
                </div>
            </form>
        </section>   
     <?php
        // put your code here
        ?>
    </body>
</html>
