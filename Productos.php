<?php
require './valida-acceso.php';
$cedula=$_SESSION["datos-usuario"]["CEDULA"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Productos</title>
        <script src="JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="JS/Scripts/Compras.js" type="text/javascript"></script>
        <link href="css/Productos.css" rel="stylesheet" type="text/css"/>
         <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <section id="Productos">
            <div class="css/Productos.css">
                <a href="Menu-cliente.php">
                    <center><img src="images/pchuella.jpg" alt="" width="50px" height="50px"/></center>
                </a>
                <center><h2 class="b">Nuestros Productos</h2></center>
            <?php 
            include './BD/ConexionBD.php';
             $re = $mysql->query("select * from tbarticulos");
                    while ($producto = $re->fetch_assoc()) {
                        
          
            
                ?>
                <center>
                <div class="caja2">
                    <img src="images/<?php echo $producto['IMAGEN']; ?>" width="200" height="200"> 
                    </div>
                <div>
                    <span>Precio: <?php echo $producto['PRECIO']; ?></span>
                </div>
                    <div>
                            <form id="frmCompra" name="frmCompra" method="post" action="">
                                <input type="hidden" name="cedulafk" value="<?php $cedula ?>">
                                <input type="button" id="btnCompra" value="Añadir al carrito">
                            </form>
                </div>
                &nbsp;
                &nbsp;
                </center>
            <?php
                    }
            ?>   
</section>
        <?php
        ?>
        <footer>
            <div class="footext">
                <p>© 2019 Ambiente Web Cliente/Servidor | Universidad Fidélitas. Juan Pablo Brenes, Montserrat Brown, María del Mar Elizondo </p>
            </div>
        </footer>
    </body>
</html>
