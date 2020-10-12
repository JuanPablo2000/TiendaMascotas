<?php 
include './Clases/Articulos.php';
$producto=new Articulos();
$resultado = $producto->ListarProductos();
$mensaje="";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Productos</title>
        <link href="css/listar-productos.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
         <section>
             <center>
                 <a href="manten-articulos.php" class="imagen">
                    <img src="images/pchuella.jpg" alt="" width="50px" height="50px"/>
                    </a>
             <h1 class="a">Lista de Productos</h1>
             
             <div class="columna">
            <?php
            if ($resultado["valido"]) {
                foreach ($resultado["datos"] as $producto){
                    echo "<div class='item'>";
                    echo "<p><strong>Código:</strong>".$producto["CODIGO"]."</p>";
                    echo "<p><strong>Marca:</strong>".$producto["MARCA"]."</p>";
                    echo "<p><strong>Descripción:</strong>".$producto["DESCRIPCION"]."</p>";
                    echo "<p><strong>Precio:</strong>".$producto["PRECIO"]."</p>";
                    echo "<p><strong>Cantidad:</strong>".$producto["CANTIDAD"]."</p>";
                    echo "</div>";
                }
            } else{
                echo "<div class='item'>";
            echo"<p>No se encontraron registros</p>";
                echo"</div>";
            }
            ?>
                 </div>
             </center>
        </section>
        <?php
        // put your code here
        ?>
    </body>
</html>
