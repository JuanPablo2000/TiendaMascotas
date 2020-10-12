<?php 
include './Clases/Compras.php';
$compra=new Compras();
$resultado = $compra->ListarProductos();
$mensaje="";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FACTURAS </title>
    </head>
    <body>
         <section>
            <h1>FACTURAS </h1>
            <?php
            if ($resultado["valido"]) {
                foreach ($resultado["datos"] as $factura){
                    echo "<div class='item'>";
                    echo "<p><strong>Id Compra:</strong>".$factura["ID_COMPRA"]."</p>";
                    echo "<p><strong>Numero de Factura:</strong>".$factura["NUMERO_FAC"]."</p>";
                    echo "<p><strong>Id Articulo:</strong>".$factura["ID_ARTICULO"]."</p>";
                    echo "<p><strong>Cantidad:</strong>".$factura["CANTIDAD"]."</p>";
                    echo "</div>";
                }
            } else{
                echo "<div class='item'>";
            echo"<p>No se encontraron registros</p>";
                echo"</div>";
            }
            ?>
        </section>
        <?php
        // put your code here
        ?>
    </body>
</html>