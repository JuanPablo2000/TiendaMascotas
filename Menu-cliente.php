<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu Principal Cliente</title>
        <link href="css/Menu-cliente.css" rel="stylesheet" type="text/css"/>
        <link href="owl/owl.carousel.min.css" rel="stylesheet"/>
        <link href="owl/owl.carousel.min.css" rel="stylesheet"/>
        <link href="css/footer&contacto.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <header>
            <div class="menu">
                <div class="contenedor">
                    <p class="logo">
                        <a href="Menu-cliente.php"><img src="images/casa-de-perro.png" alt="35" width="35"/></a>
                    </p>
                    <nav>
                        <ul>
                            <li><a href="Perfil.php">Mi Perfil</a></li>
                            <li><a href="Productos.php">Comprar</a></li>
                            <li><a href="Carrito.php">Ver mis compras</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                            <li><a href="Menu-cliente.php">Volver al menu</a></li>
                            <li> <form id="frmLogout" name="frmLogout" method="post" action="procesar.php">
                                    <input type="hidden" name="accion" value="logout">
                                    <input type="submit" name="btnLogout" value="Cerrar Sesion">
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
<!--            <div class="contenedor" id="contenedortituloflex">
                <h1>Bienvenidos</h1>
            </div>-->
        </header>
        <section id="contacto">
            <div class="contenedor">
                <h3>Contacto</h3>
                <form class="form" action="enviodeform.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="email" name="email" placeholder="correo" required>
                    <textarea name="mensaje" placeholder="Dejanos tu mensaje" required></textarea>
                    <input type="submit" name="" value="Enviar mensaje">
                </form>
                <div class="pie">
                    <div class="email"><img src="images/mail-icon.png" alt=""/>TusMascotasNosPrefieren@gmail.com</div>
                    <div class="watsapp"><img src="images/whatsapp-icon.png" alt=""/>88776655</div>
                </div>
            </div>
        </section>
        <footer>
            <div class="contenedor">
                <div class="redes">
                    <a href=""><img src="images/facebook.png" alt=""/></a>
                    <a href=""><img src="images/github.png" alt=""/></a>
                    <a href=""><img src="images/linkedin.png" alt="imagen de linkedin"></a>
                    <a href=""> <img src="images/medium.png" alt=""/></a>
                </div>
                <div class="footext">
                    <p>© 2019 Ambiente Web Cliente/Servidor | Universidad Fidélitas. Juan Pablo Brenes, Montserrat Brown, María del Mar Elizondo </p>
                </div>
            </div>
        </footer>
        <?php
        // put your code here
        ?>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <script src="owl/owl.carousel.min.js"></script>
        <script>
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 4
                        }
                    }
                })
        </script>
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    scroll = $(window).scrollTop();
                    if (scroll > 100) {
                        $('.menu').css({"position": "fixed"});
                        $('.menu').css({"width": "100%"});
                        $('.menu').css({"top": "0"});
                        $('.menu').css({"background": "#eee"});
                        $('.menu a').css({"color": "#000"});
                        $('.logo').css({"color": "#000"});
                        $('.menu').css({"box-shadow": "rgba(0, 0, 0, 0.22)"});
                        $('.menu').css({"z-index": "100"});
                        $('.menu nav').css({"margin": "10px"});
                    } else {
                        $('.menu').css({"position": "relative"});
                        $('.menu').css({"background": "transparent"});
                        $('.menu').css({"box-shadow": "0 0 0"});
                        $('.menu a').css({"color": "#fff"});
                        $('.logo').css({"color": "#fff"});
                        $('.menu nav').css({"margin": "10px"});
                    }
                })
            })
        </script>
    </body>
</html>
