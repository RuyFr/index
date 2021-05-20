<?php

$conexion = mysqli_connect('localhost', 'root', '', 'registro_2.0') or die (mysql_error($mysqli));
 
 insertar ($conexion);

 function insertar($conexion){

    	$nombre = trim ($_POST['nombre']);
        $correo = trim ($_POST['correo']);
        $programa = trim($_POST['programa']);
        $edad = trim($_POST['edad']);
        $numero = trim($_POST['numero']);
        $sexo = trim($_POST['sexo']);
        $direccion = trim($_POST['direccion']);
        $curp = trim($_POST['curp']);


           $consulta = "INSERT INTO final (nombre, correo, programa, edad, numero, sexo, direccion, curp) VALUES('$nombre', '$correo', '$programa', '$edad', '$numero', '$sexo', '$direccion', '$curp')";

           mysqli_query($conexion, $consulta);
           mysqli_close($conexion);
}
?>
