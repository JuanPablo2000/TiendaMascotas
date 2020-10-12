<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar Usuario</title>
        <script src="JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="JS/Scripts/Usuario.js" type="text/javascript"></script>
        <link href="css/editar-usuario.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <div class="centro">
            <div class="hijo">
                <a href="manten-usuarios.php" class="imagen">
                    <img src="images/pchuella.jpg" alt="" width="50px" height="50px"/>
                </a>
                <h1 class="a">Actualizar Usuario</h1>
                &nbsp;
                <form id="frmBuscar" name="frmBuscar" method="post" action="">
                    <div>
                        <label class="b">Digite la cédula del usuario</label>
                        <input type="text" name="cedula-buscar" value="">
                    </div>
                    <div>
                        <input type="button" id="btnBuscar" name="btnbuscar" value="Buscar Usuario">
                    </div>
                </form>
                <br>
                <div class="contenedor-mensaje">
                </div>
                <br>
                <form id="frmActualizar" name="frmActualizar" method="post" action="procesar.php">
                    <p>
                        <label class="c">Cédula:</label>
                        <input type="text"  id="cedula" name="cedula" value="">  
                    </p>
                    <p>
                        <label class="c">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="">
                    </p>
                    <p>
                        <label class="c">Apellidos:</label>
                        <input type="text" id="apellidos" name="apellidos" value="">   
                    </p>
                    <p>
                        <label class="c">E-mail:</label>
                        <input type="email" id="email" name="email" value="">   
                    </p>
                    <p>
                        <label class="c">Teléfono:</label>
                        <input type="number" id="telefono" name="telefono" value="">   
                    </p>
                    <p>
                        <label class="c">Usuario:</label>
                        <input type="text" id="usuario" name="usuario" value="">   
                    </p>
                    <p>
                        <label class="c">Rol:</label>
                        <select name="rol" id="rol">
                            <option value="Admin">Administrador</option>
                            <option value="User">Usuario</option>
                        </select>  
                    </p>
                    <p>
                        <input type="button" id="btnActualizar" name="btnActualizar" value="Actualizar Usuario">
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>
