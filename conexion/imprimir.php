<?php 
$inc = include("conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM citas";
	$resultado = mysqli_query($con,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['ID'];
	    $nombre = $row['nombre'];
	    $apellido = $row['apellido'];
	    $documento = $row['documento'];
        $telefono = $row['telefono'];
        $correo = $row['correo'];
        $direccion = $row['direccion'];
        $servicio = $row['servicio'];
        $computador = $row['computador'];
        $observaciones = $row['observaciones'];
        $fecha = $row['fecha'];
        }
    }
}
?>