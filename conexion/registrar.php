<?php

include("conexion.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['correo']) >=1 && strlen($_POST['contrasena']) >=1) {
        $name = trim($_POST['usuario']);
        $correo = trim($_POST['correo']);
        $password = trim($_POST['contrasena']);
        $fechareg = date("d/m/y");
        $consult = "INSERT INTO registro(usuario, correo, contrasena, fecharegistro, rol_id) VALUES ('$name','$correo','$password','$fechareg','2')";
        $resultado = mysqli_query($con,$consult);
        if ($resultado) {
	    	header("location:../login.html");
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }
}
?>