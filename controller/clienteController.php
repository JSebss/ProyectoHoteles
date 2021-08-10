<?php

    include 'conexion.php';

    $nombres = $_POST['name'];
    $apellidos = $_POST['lastname'];
    $fechaNac = $_POST['birth'];
    $telefono = $_POST['tel'];
    $numDoc = $_POST['numDoc'];
    $correo = $_POST['email'];
    $clave = $_POST['password'];

    $verifyEmail = mysqli_query($conexion, "CALL correoExistente ('$correo');");
    
    if(mysqli_num_rows($verifyEmail) > 0){
        echo '
        <script>
            alert("Correo ya registrado, intenta con otro diferente");
            window.location = "../view/signup.html";
        </script>  
        ';
        exit();
    }

    $execute = mysqli_query($conexion, "CALL crearCliente ('$nombres', '$apellidos', '$fechaNac', '$telefono', '$numDoc', '$correo', '$clave');");

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
            window.location = "../view/signup.html";
        </script>        
        ';
    }

    mysqli_close($conexion);

?>