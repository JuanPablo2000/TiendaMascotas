<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <title>www.Tienda-Accesorios.com</title>
         <link href="css/Principal.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
        <script src="JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="JS/Plugins/Messi/dist/messi.js" type="text/javascript"></script>
        <script src="JS/Plugins/Messi/dist/messi.min.js" type="text/javascript"></script>
        <link href="JS/Plugins/Messi/dist/messi.css" rel="stylesheet" type="text/css"/>
        <script src="JS/Scripts/Usuario.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        ?>
        <div id="login-box"><!-- el primer div, el cual contendra los margenes de la pagina -->
            <div class="left"> <!-- Segundo div el cual sera la caja donde tendremos los botones de redireccionamiento-->
                <h1>Iniciar Sesion</h1>
                <form id="frmlogin" name="frmlogin" method="post" action="">                  
                    <input type="text" name="usuario" value="" placeholder="Usuario">
                    <input type="password" name="contrasena" value="" placeholder="Contraseña">
                     <input type="hidden" name="accion" value="login">
                    <input type="button" id="btn_login" name="btn_login" value="Iniciar Sesión">
                    <div><a  class="a" href="registro.php">Crea tu cuenta aquí</a></div>
                    
                </form>
            </div>
            <div class="right">
                <span class="signwith">Ingresar con Redes Sociales</span>
                <button class="social facebook">Ingresar con Facebook</button>
                <button class="social facebook">Ingresar con Twiter</button>
                <button class="social facebook">Ingresar con Google+</button>
            </div>
        </div>
    </body>
</html>
