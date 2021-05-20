<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    <title>Login</title>
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center align-content-center">
        <div class="col-30 barra">
            <img src="logo coacalco.png">
            <h4 class="text-light justify-content-center align-content-center"><center>Programas de Bienestar de Coacalco</center></h4>
            <ul class="text-light nu">
                <li><a href="registrarse.php" class="text-light">Registrarse</a></li>
            </ul>
        </div>
    </div>
 </div>
    <div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content center align-items-center">
            <div id="login-box" class="col-md-12  text-dark ">
                <form id="formLogin" class="form" action="#" method="POST">
                        <h3 class="text-center text-light">Iniciar Sesion</h3>
                        <div class="form-group">
                            <label for="usuario" class="text-light">Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-light">Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="submit" class="btn  btn-lg " value="Ingresar">
                        </div>
                </form>
            </div>
        </div>
    </div>
 </div>
</div>



<script src="codigo.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
