<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Producto</title>
        <script src="JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="JS/Scripts/Articulos.js" type="text/javascript"></script>
        <link href="CSS/agregar-producto.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <div class="centro">
            <div class="hijo">
                <a href="manten-articulos.php" class="imagen">
                    <img src="images/pchuella.jpg" alt="" width="50px" height="50px"/>
                </a>
                <h1 class="a">Agregar Producto</h1>
                <section>
                    <form id="frmAgregarproduct" name="frmAgregarproduct" method="post" action="">
                        <p>
                            <label class="c">Código:</label>
                            <input type="text" name="codigo" value="">
                        </p>
                        <p>
                            <label class="c">Marca:</label>
                            <input type="text" name="marca" value="">   
                        </p>
                        <p>
                            <label class="c">Descripción:</label>
                            <input type="text" name="descripcion" value="">   
                        </p>
                        <p>
                            <label class="c">Precio:</label>
                            <input type="number" name="precio" value="">
                        </p>
                        <p>
                            <label class="c">Cantidad:</label>
                            <input type="number" name="cantidad" value="">
                        </p>
                        <p>
                            <label class="c">Imagen:</label>
                            <input type="text" name="imagen" value="">
                        </p>
                        <p>
                            <input type="button" id="btnAgegarProduct" name="btnAgegarProduct" value="Agregar Producto">   
                        </p>
                    </form>
                </section>
            </div>
        </div>
        <?php
        ?>
    </body>
</html>
