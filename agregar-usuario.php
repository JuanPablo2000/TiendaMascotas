<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Usuario</title>
        <script src="JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="JS/Scripts/Usuario.js" type="text/javascript"></script>
        <link href="css/agregar-usuario.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <div class="centro">
            <div class="hijo">
                <a href="manten-usuarios.php" class="imagen">
                    <img src="images/pchuella.jpg" alt="" width="50px" height="50px"/>
                </a>
                <h1 class="a">Agregar Usuario</h1>
                <section>
                    <form id="frmCrearUsuario" name="frmCrearUsuario" method="post" action="">
                        <p>
                            <label class="c">Cédula:</label>
                            <input type="text" name="cedula" value="">
                        </p>
                        <p>
                            <label class="c">Nombre:</label>
                            <input type="text" name="nombre" value="">   
                        </p>
                        <p>
                            <label class="c">Apellidos:</label>
                            <input type="text" name="apellidos" value="">   
                        </p>
                        <p>
                            <label class="c">E-mail:</label>
                            <input type="email" name="email" value="">
                        </p>
                        <p>
                            <label class="c">Teléfono:</label>
                            <input type="tel" name="telefono" value="">
                        </p>
                        <p>
                            <label class="c">Usuario:</label>
                            <input type="text" name="usuario" value="">   
                        </p>
                        <p>
                            <label class="c">Contraseña:</label>
                            <input type="password" name="contrasena" value="">   
                        </p>
                        <p>
                            <label class="c">Tipo de Usuario</label>
                            <select name="rol">
                                <option value="Admin">Administrador</option>
                                <option value="User">Usuario</option>
                            </select>  
                        </p>
                        <p>
                            <input type="button" id="btnCrearUsuario" name="btnCrearUsuario" value="Crear Usuario">   
                        </p>
                    </form>
                </section>
            </div>
        </div>
    </body>
</html>
