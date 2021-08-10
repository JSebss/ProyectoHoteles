<?php

    include 'conexion.php';


        $NomHotel=$_POST['NomHotel'];
        $DirHotel=$_POST['DirHotel'];
        $DesHotel=$_POST['DesHotel'];
        $ImaHotel=$_POST['ImaHotel'];
        $IdEnc=$_POST['IdEnc'];
        
        $query = "CALL crearHotel ('$NomHotel', '$DirHotel', '$DesHotel', '$ImaHotel', '$IdEnc');";

        $execute = mysqli_query($conexion, $query);
    
        if($execute){
            echo '
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "../view/apartadoHoteles.php";
            </script>        
            ';
        }else{
            echo '
            <script>
                alert("Error al registrar, intentalo de nuevo");
                window.location = "../view/addHotel.php";
            </script>        
            ';
        }
    
        mysqli_close($conexion);
    
    ?>