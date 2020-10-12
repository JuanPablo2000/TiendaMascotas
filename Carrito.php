<?php
session_start();
include './BD/ConexionBD.php';
if (isset($_SESSION["carrito"])) {
    
}else{
    if (isset($_GET["ID"])) {
        $nombre="";
        $precio=0;
        $imagen="";
         $re = $mysql->query("select * from tbarticulos where ID=".$_GET['ID']);
          while ($producto = $re->fetch_assoc()) {
              $nombre=$producto['DESCRIPCION'];
              $precio=$producto['PRECIO'];
              $imagen=$producto['IMAGEN'];
          }

          $_SESSION["carrito"]=$producto->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrito</title>
    </head>
    <body>
        <h2> Mis Productos</h2>
        <?php
        $total=0;
        if (isset($_SESSION['carrito'])) {
            $datos=$_SESSION['carrito'];
            $total=0;
        for($i=0; i<count($datos);$i++){
            ?>
        <div class="producto">
            <center>
                <img src="images/<?php echo $datos[$i]['IMAGEN'];?>"><br>
                <span><?php echo $datos[$i]['DESCRIPCION'];?></span><br>
                <span>Precio<?php echo $datos[$i]['PRECIO'];?></span><br>
                <span>Cantidad <input type="text" value="<?php echo $datos[$i]['CANTIDAD']; ?>"</span><br>
                <span>Subtotal<?php echo $datos[$i]['PRECIO']*['CANTIDAD'];?></span>

            </center>
        </div>
        <?php
       $total=($datos[$i]['PRECIO']*['CANTIDAD'])+$total;
        }
        }else{
            echo 'el carrito esta vacio';
        }
        echo 'Total:' .$total;
        ?>
        <a href="Productos.php">Volver al catalogo</a>
    </body>
</html>
