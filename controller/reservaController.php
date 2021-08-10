<?php

include 'conexion.php';

$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$nacimiento = $_POST['birth'];
$documento = $_POST['numDoc'];
$correo = $_POST['email'];
$clave = $_POST['clave'];
$telefono = $_POST['phone'];
$fechaE = $_POST['fechaE'];
$fechaS = $_POST['fechaS'];
$fechaActual = date('Y-m-d H:i:s');


$cliente = "INSERT INTO cliente (Nombres_Cliente, Apellidos_Cliente, FechaNac_Cliente, Telefono_Cliente, Numero_Documento_Cliente, Correo_cliente, Contraseña_Cliente) VALUES ('$nombre', '$apellido', '$nacimiento', '$telefono', '$documento', '$correo', '$clave');";

$execute = mysqli_query($conexion, $cliente);

if($execute == 1){
$reserva = "INSERT INTO reserva (Fecha_Reserva, FechaEntrada_Reserva, FechaSalida_Reserva, TotalApagar_Reserva) VALUES ('$fechaActual', '$fechaE', '$fechaS', '120000');";

$execute2 = mysqli_query($conexion, $reserva);
echo '
<script>
    alert("Reserva exitosa");
    window.location = "../index.php";
</script>        
';
}else{
    echo '
    <script>
        alert("Error al reservar, intentalo de nuevo");
        window.location = "../view/reserva.php";
    </script>        
    ';
}

?>