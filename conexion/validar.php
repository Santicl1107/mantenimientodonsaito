<?php
include('conexion.php');
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$SESION['registro']=$usuario;

$con = mysqli_connect($host, $user, $pass, $bd, $puerto);

$consulta="SELECT*FROM registro where usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['rol_id']==1){#administrador
    header("location:../administrador.php");
}elseif($filas['rol_id']==2){#cliente
    header("location:../indexx.html");
}
else{
    ?>
    <?php
    include("../login.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($con);