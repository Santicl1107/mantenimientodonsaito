<?php
include('conexion.php');
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$SESION['usuario']=$usuario;

$con = mysqli_connect($host, $user, $pass, $bd, $puerto);

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:../index.html");
}else{
    ?>
    <?php
    include("../login.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($con);