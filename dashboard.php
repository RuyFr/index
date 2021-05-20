<?php
$conexion=mysqli_connect('localhost','root','','registro_2.0');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>
 <div class="container-fluid">
    <div class="row justify-content-center align-content-center">
        <div class="col-30 barra">
            <img src="logo coacalco.png">
            <h4 class="text-light justify-content-center align-content-center"><center>Sistema Interno de Registros</center></h4>
        </div>
    </div>
 </div>
<div class="container-fluid">
    <div class="row">
        <div class="barra-lateral col-12 col-sm-auto">
            <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                <a href="dashboard.php"><i class="icon ion-md-home px-3"></i><span>Inicio</span></a>
                <a href=""><i class="icon ion-md-stats px-3"></i><span>Estadisticas</span></a>
                <a href="registro.php"><i class="icon ion-md-person px-3"></i><span>Nuevo Registro</span></a>
                <a href="index.php"><i class="icon ion-md-close px-3"></i><span>Cerrar Sesion</span></a>
            </nav>
        </div>
        <main class="main col">
            <div class="row justify-content-center align-content-center text-center">
                <div class="columna col-lg-12">
                  <div class="table-responsive">
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width: 100%;">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Programa</th>
                                <th>Edad</th>
                                <th>Numero</th>
                                <th>Sexo</th>
                                <th>Direccion</th>
                                <th>CURP</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
 <?php
 $sql= "SELECT * from final";
 $result = mysqli_query($conexion, $sql);
 while ($mostrar = mysqli_fetch_array($result)){
     ?>
                        <tbody>
                            <tr>
                              <td><?php echo$mostrar ['id']?></td>
                              <td><?php echo$mostrar ['nombre']?></td>
                              <td><?php echo$mostrar ['correo']?></td>
                              <td><?php echo$mostrar ['programa']?></td>
                              <td><?php echo$mostrar ['edad']?></td>
                              <td><?php echo$mostrar ['numero']?></td>
                              <td><?php echo$mostrar ['sexo']?></td>
                              <td><?php echo$mostrar ['direccion']?></td>
                              <td><?php echo$mostrar ['curp']?></td>
                              <td></td>
                            </tr>
                        </tbody>
<?php
 }
 ?>
                    </table>
                  </div>
                </div>
            </div>
        </main>
    </div>
</div>







<script src="main.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
