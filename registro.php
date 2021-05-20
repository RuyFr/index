<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Nuevo</title>
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
        <section id="seccion">
        <form id="form" class="" action="enviar.php" method="POST">
            <h4>REGISTRO NUEVO </h4>
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre">
            <input class="controls" type="email" name="correo" id="correo" placeholder="ejemplo@gmail.com">
            <input class="controls" type="text" name="programa" id="programa" placeholder="Programa al que pertenece">
            <input class="controls" type="text" name="edad" id="edad" placeholder="Edad">
            <input class="controls" type="text" name="numero" id="numero" placeholder="Numero de telefono">
            <input class="controls" type="text" name="sexo" id="sexo" placeholder="Sexo">
            <input class="controls" type="text" name="direccion" id="direccion" placeholder="Calle, Numero exterior-interior, Colonia">
            <input class="controls" type="text" name="curp" id="curp" placeholder="CURP">
            <button class="boton" type="submit" name="registrar">Registrar</button>
            <script src="success"></script>
        </form> 
        </section>
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
