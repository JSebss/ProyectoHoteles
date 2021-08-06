<?php

    include 'conexion.php';

    $nombres = $_POST['name'];
    $apellidos = $_POST['lastname'];
    $fechaNac = $_POST['birth'];
    $correo = $_POST['email'];
    $clave = $_POST['password'];

    $query = "CALL crearEncargado ('$nombres', '$apellidos', '$fechaNac', '$correo', '$clave');";

    $execute = mysqli_query($conexion, $query);

    if($execute){
        echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../index.php";
        </script>        
        ';
    }else{
        echo '
        <script>
            alert("Error al registrar, intentalo de nuevo");
            window.location = "../view/login.php";
        </script>        
        ';
    }

    mysqli_close($conexion);

?>