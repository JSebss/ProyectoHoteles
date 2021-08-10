<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/css/consultarReservas.css">
</head>
<body>
    <header>
        <h3 class="text-center text-light">Reservas</h3>
    </header>
    <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formReservas">
      <div class="modal-body">
      <div class="form-group">
               <label for="ingreso">Check-in</label>
               <input type="date" name="ingreso" id="ingreso" class="form-control">
            </div>
            <div class="form-group">
               <label for="salida">Check-out</label>
               <input type="date" name="salida" id="salida" class="form-control">
            </div>
      </div>
    </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <div class="container">
        <div class="table responsive">
    <table id="example" class="table table-striped table-bordered table-condensed" style="width:100%">
        <thead>
            <tr>
                
                <th>Numero de reserva</th>
                <th>Fecha de la reserva</th>
                <th>Fecha entrada</th>
                <th>Fecha salida</th>
                <th>Precio</th>
                <th>Accion</th>
            </tr>
        </thead>
        <?php
        include '../controller/conexion.php';

        $reserva = "SELECT Id_Reserva, Fecha_Reserva, FechaEntrada_Reserva, FechaSalida_Reserva, TotalApagar_Reserva FROM reserva;";

        $execute = mysqli_query($conexion, $reserva);

        while($table = mysqli_fetch_array($execute)){
        ?>
        <tbody>
            <tr>  <form method="post">
                <td name="id"><?php echo $table['Id_Reserva'] ?></td>
                <td><?php echo $table['Fecha_Reserva'] ?></td>
                <td><?php echo $table['FechaEntrada_Reserva'] ?></td>
                <td><?php echo $table['FechaSalida_Reserva'] ?></td>
                <td><?php echo "$".$table['TotalApagar_Reserva'] ?></td>
                <td>
                    <button type="submit" name="btnConsultar" class="btn btn-primary"><i class="far fa-file"></i></button>
                    <button type="submit" name="btnEditar" class="btn btn-warning"><i class="far fa-edit"></i></button>
                    <button type="submit" name="btnEliminar" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></td>
                    </form>
            </tr>
        </tbody>
        <?php
        }

        ?>
    </table>
</div>
</div>
</body>
<script src="../library/jquery-3.6.0.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script src="../assets/js/consultarReservas.js"></script>
</html>