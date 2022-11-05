<?php

include("conexion.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >=1 && strlen($_POST['documento']) >=1 && strlen($_POST['telef']) >=1 && strlen($_POST['email']) >=1 && strlen($_POST['direccion']) >=1 && strlen($_POST['servicio']) >=1 && strlen($_POST['computador']) >=1 && strlen($_POST['observaciones']) >=1 && strlen($_POST['fecha']) >=1) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $documento = trim($_POST['documento']);
        $telefono  = trim($_POST['telef']);
        $email  = trim($_POST['email']);
        $direccion  = trim($_POST['direccion']);
        $servicio  = trim($_POST['servicio']);
        $computador  = trim($_POST['computador']);
        $observaciones  = trim($_POST['observaciones']);
        $fecha  = trim($_POST['fecha']);
        $consult = "INSERT INTO citas(nombre, apellido, documento, telefono, correo, direccion, servicio, computador, observaciones, fecha) VALUES ('$nombre','$apellido','$documento','$telefono','$email','$direccion','$servicio','$computador','$observaciones','$fecha')";
        $resultado = mysqli_query($con,$consult);
        if ($resultado) {
	    	header("location:../cita.html");
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }
}
?>