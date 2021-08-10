<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Alojamientos</title>
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="shortcut icon" href="assets/iconos/favicon.ico" type="image/x-icon"/>
</head>
<body>
    <div class="container">
        <nav class="nav-main">
            <img src="assets/images/logo.png" alt="Logo" class="nav-logo"/>
            <ul class="nav-menu">
                <a href="view/login.php"><i class="fa fa-user"></i></a>
                <li>
                    <a href="view/login.php">Iniciar sesion</a>
                </li>
                <li>
                    <a href="#container-footer">Contactenos</a>
                </li>
                <li class="dropdown">
                <span><img src="assets/images/panda.jpg" alt="panda" class="nav-login"></span>
                <ul class="dropdown-menu">
                <li><a href="#">Vistos recientemente</a></li>
                <li><a href="view/consultarReservas.php">Reservaciones</a></li>
                <li><a href="view/configCuenta.html">Configuracion de la cuenta</a></li>
                <li><a href="#">Informacion general</a></li>
                <hr>
                <li><a href="#">Cerrar sesion</a></li>
              </ul>
                </li>
            </ul>
        </nav>
    </div>  
    <div class="banner">
        <div class="text">
            <h1>Alojamientos en Bogotá</h1>
            <p>Los mejores alojamientos que puedes encontrar en la capital de Colombia</p>
        </div>
    </div>
        <div class="row-img">
            <tr>
                <td>
                    <img src="assets/images/hotel1.jpg" alt="Hotel1"/>
                </td>
                <td>
                    <img src="assets/images/hotel2.jpg" alt="Hotel2"/>
                </td>
                <td>
                    <img src="assets/images/hotel3.jpg" alt="Hotel3"/>
                </td>
            </tr>
        </div>  
    <form action="view/reserva.php" method="POST"> 
        <div class="hotelSearch">
            <input type="search" class="search" placeholder="   ¿Donde quieres ir?"/>
            <input type="date" name="fechaI" class="fechaI"/>
            <input type="date" name="fechaS" class="fechaF"/>
            <button type="submit" class="btn btn-primary"><b>Buscar</b></button>
        </div>
    </form>
    <div id="hidden">
        <?php
            include 'controller/conexion.php';

            $consulta= "CALL llamarHotel;";

            $hotel = mysqli_query($conexion, $consulta);

            if($hotel){
                while($fila = $hotel->fetch_array()){
                    $nombre = $fila['Nombre_Hotel'];
                    $direccion = $fila['Direccion_Hotel'];
                    $descripcion = $fila['Descripcion_Hotel'];
                    ?>
                    <div>
                        <h3><?php echo $nombre; ?></a></h3>
                        <div>
                            <p>
                                <b>Direccion: </b><?php echo $direccion; ?><br>
                                <b>Descripcion: </b><?php echo $descripcion; ?><br>
                            </p>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
<footer class="footer">
    <div class="container-footer" id="container-footer">
        <div class="row">
            <div class="footer-col">
                <h4>Compañia</h4>
                    <ul>
                        <li><a href="#">Sobre nosotros</a></li>
                        <li><a href="#">Porque escogernos</a></li>
                        <li><a href="#">Mision</a></li>
                        <li><a href="#">Vision</a></li>
                    </ul>
            </div>
            <div class="footer-col">
                <h4>Ayuda</h4>
                <ul>
                    <li><a href="#">Foro</a></li>
                    <li><a href="#">Preguntas mas comunes</a></li>
                    <li><a href="#">Servicio tecnico</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Servicio</h4>
                <ul>
                    <li><a href="#">Alojamientos</a></li>
                    <li><a href="#">Busqueda</a></li>
                    <li><a href="#">Reserva</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contactenos</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
            </div>
        </div>
    </div>   
</footer>
<script src="library/jquery-3.6.0.min.js"></script>
<script src="assets/js/search.js"></script>
</body>
</html>