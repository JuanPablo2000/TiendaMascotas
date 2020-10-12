<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Elminar Articulo</title>
        <script src="JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="JS/Scripts/Articulos.js" type="text/javascript"></script>
        <link href="css/eliminar-producto.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <div class="centro">
            <div class="hijo">
                <a href="manten-articulos.php" class="imagen">
                    <img src="images/pchuella.jpg" alt="" width="50px" height="50px"/>
                </a>
                <section>
                    <h1 class="a">Eliminar Articulo</h1>
                    <form id="frmBuscar" name="frmBuscar" method="post" action="">
                        <p>
                            <label class="b">Digite el código del articulo que desea eliminar</label>
                            &nbsp;
                            <input type="text" name="codigo_busca" value="">
                        </p>
                        <p>
                            <input type="button" id="btnBuscarProducto" value="Buscar Producto">
                        </p>       
                    </form>            
                    <div class="contenedor">

                    </div>

                </section>
            </div>
        </div>
        <?php
        ?>
    </body>
</html>
