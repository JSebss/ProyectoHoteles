<?php

    include 'conexion.php';

    $nombres = $_POST['name'];
    $apellidos = $_POST['lastname'];
    $fechaNac = $_POST['birth'];
    $telefono = $_POST['tel'];
    $numDoc = $_POST['numDoc'];
    $correo = $_POST['email'];
    $clave = $_POST['password'];

    $query = "INSERT INTO cliente (Nombres_Cliente, Apellidos_Cliente, FechaNac_Cliente, Telefono_Cliente, Numero_Documento_Cliente, Correo_cliente, Contraseña_Cliente) VALUES ('$nombres', '$apellidos', '$fechaNac', '$telefono', '$numDoc', '$correo', '$clave');";

    $execute = mysqli_query($conexion, $query);

    if($execute){
        echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../index.html";
        </script>        
        ';
    }else{
        echo '
        <script>
            alert("Error al registrar, intentalo de nuevo");
            window.location = "../view/login.html";
        </script>        
        ';
    }

    mysqli_close($conexion);

?>