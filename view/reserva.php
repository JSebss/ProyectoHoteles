<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link action="../controller/reservaController.php" method="POST" rel="stylesheet" href="../assets/css/reserva.css">
</head>
<body>
<form class="quick-reservation" action="../controller/reservaController.php" method="POST">
<?php
            $fechaI = $_POST['fechaI'];
            $fechaS = $_POST['fechaS'];
?>   
   
<div class="container">
   <header class="quick-reservation__header">
      <h2 class="title">
         Nueva reservación
      </h2>
   </header>
   
   <div class="quick-reservation__form">
      <section class="form__content">
         <div class="row-wrapper">
            <div class="ele adults">
               <label for="adults">Adultos</label>
               <select name="adults" id="adults">
                  <option value="hide">Adultos</option>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
                  <option value="">5</option>
               </select>
            </div>
            <div class="ele children">
               <label for="children">Niños</label>
               <select name="children" id="children">
                  <option value="hide">Niños</option>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
                  <option value="">5</option>
               </select>
            </div>
            <div class="ele rooms">
               <label for="Rooms">Habitacion</label>
               <select name="rooms" id="Rooms">
                  <option value="hide">Habitacion</option>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
                  <option value="">5</option>
               </select>
            </div>         
         </div>
         <div class="row-wrapper">
            <div class="ele first-name">
               <label for="firstName">Nombre</label>
               <input type="text" name="name"  placeholder="Nombres" id="firstName">
            </div>
            <div class="ele last-name">
               <label for="lastName">Apellidos</label>
               <input type="text" name="lastname" placeholder="Apellidos" id="lastName">
            </div>    
         </div>
         <div class="row-wrapper">
         <div class="ele fechaNac">
         <label>Fecha de nacimiento:</label>
         <input type="date" name="birth" required/>
         </div> 
         <div class="ele numDoc">
         <label>Numero de documento:</label>
         <input type="number" name="numDoc" placeholder="Documento" required/>
         </div> 
         </div> 
         <div class="row-wrapper">
            <div class="ele phone-number">
               <label for="phoneNumber">Numero de telefono</label>
               <input type="tel" name="phone" placeholder="Telefono" id="phoneNumber">
            </div>
            <div class="ele email-address">
               <label for="emailAddress">Correo electronico</label>
               <input type="email" name="email" placeholder="Correo" id="emailAddress">
            </div>
            <div class="ele password">
               <label for="emailAddress">Contraseña</label>
               <input type="password" name="clave" placeholder="Clave" id="emailAddress">
            </div>
         </div> 
         <div class="row-wrapper">
            <div class="ele fechaE">
               <label for="emailAddress">Check-in</label>
               <input type="date" value="<?php echo $fechaI ?>" name="fechaE" id="emailAddress">
            </div>
            <div class="ele fechaS">
               <label for="phoneNumber">Check-out</label>
            <input type="date" name="fechaS" value="<?php echo $fechaS ?>" id="phoneNumber">
      
            </div>
         </div>            
      </section>
      
   </div>
   
   <div class="reservation-info">
      <div class="ele data">
         <h4 class="data__head">Tipo de habitacion</h4>
         <p class="data__description">Sencilla</p>
      </div>
      <div class="ele data">
         <h4 class="data__head">Duracion</h4>
         <p class="data__description">
         <?php
            echo $fechaI." / ".$fechaS;
         ?>
         </p>
      </div>
      <div class="ele data">
         <h4 class="data__head">Precio</h4>
         <p class="data__description">$45/noche<br> Total $270</p>
      </div>
   </div>
   
   <footer class="form__footer">
      <div class="footer-wrapper">
         <input type="submit" value="Cancelar" class="">
         <input type="submit" value="Reservar" class="">
      </div>
   </footer>
</div>
</form>
<script src="../library/jquery-3.6.0.min.js"></script>
<script src="../assets/js/reserva.js"></script>
</body>
</html>