<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/login.css">
        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <title>Inicia sesión</title>
</head>
<body>
  <div class='box'>
    <div class='box-form'>
      <div class='box-login-tab'></div>
      <div class='box-login-title'>
        <div class='i i-login'></div><h2>Inicia</h2>
      </div>
      <div class='box-login'>
        <div class='fieldset-body' id='login_form'>
          <button onclick="openLoginInfo();" class='b b-form i i-more'></button>
          <form action="login.php" method="POST">
            <p class='field'>
            <label for='user'>Correo</label>
            <input type='email' id='email' name='email' required/>
          </p>
            <p class='field'>
            <label for='pass'>Contraseña</label>
            <input type='password' id='pass' class="pass" name='pass' required/>
            <i class="show fas fa-eye"></i>
            <i class="hide fas fa-eye-slash"></i>
          </p>
  
            <label class='checkbox'>
              <input type='checkbox' value='TRUE' /> Mantener sesión
            </label>
  
            <input type='submit' id='do_login' name="btningresar" value='INICIA SESIÓN' />
            </form>
        </div>
      </div>
    </div>
    <div class='box-info'>
                <p><button onclick="closeLoginInfo();" class='b b-info i i-left'></button><h3>¿Necesitas ayuda?</h3>
      </p>
                <div class='line-wh'></div>
                <button onclick="" class='b-support'> ¿Olvidaste la contraseña?</button>
      <button onclick="" class='b-support'> Contacto de ayuda</button>
      <form action="signup.html">     
      <div class='line-wh'></div>
      <button onclick="" class='b-cta'> Crea una cuenta</button>
    </form>          
    </div>
  </div>
  <?php
include('../controller/conexion.php');

session_start();
if(isset($_SESSION['nombredelusuario']))
{
	header('location: ../index.php');
}

if(isset($_POST['btningresar']))
{
	
$nombre = $_POST["email"];
$pass = $_POST["pass"];
	
$query = mysqli_query($conexion,"SELECT * FROM cliente WHERE Correo_Cliente = '".$nombre."' and Contraseña_Cliente = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	$_SESSION['nombredelusuario']=$nombre;
	header("Location: ../index.php");
}
else if ($nr == 0) 
{
	echo "<script> alert('Usuario no existe');window.location= 'login.php' </script>";
}

} 
?>
</body>
<script src="../library/jquery-3.6.0.min.js"></script>
<script src="../assets/js/login.js"></script>
</html>