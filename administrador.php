<?php
include("conexion/conexion.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- DATATABLES -->
    <!--  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="https://kit.fontawesome.com/c26f1a4cec.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        th,td {
            padding: 0.4rem !important;
        }
        body>div {
            box-shadow: 0 5px 10px -1px rgb(33, 133, 213);           
            border-radius: 10px;
        }
    </style>
    <title>Paginacion</title>
</head>
<body>

    <!-- Barra de navegación -->
    <nav class="barra">
        <div class="logo">
            <img src="imagenes/logo_dms.jpg" alt="" class="imagen">
        </div>
        <div class="titulo">
            <h1>Administracion de Citas</h1>      
        </div>
        <div class="iniciar"><a href="conexion/cerrarsesion.php" class="boton2"><i class="fa-solid fa-user-unlock"></i><span>Cerrar Sesion</span></a></div>
    </nav>

    <div class="container" style="margin-top: 50px;padding: 5px">
    <table id="tablax" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Direccion</th>
            <th>Servicio</th>
            <th>Computador</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </thead>
        <tbody>   
            <?php
	            $query = " SELECT * FROM citas";
	            $resultado= mysqli_query($con,$query);
	                    
	            while($row = mysqli_fetch_array($resultado)){ 
            ?>
            <tr>
                <td><?php echo $row['ID']?></td>
                <td><?php echo $row['nombre']?></td>
                <td><?php echo $row['apellido']?></td>
                <td><?php echo $row['documento']?></td>
                <td><?php echo $row['telefono']?></td>
                <td><?php echo $row['correo']?></td>
                <td><?php echo $row['direccion']?></td>
                <td><?php echo $row['servicio']?></td>
                <td><?php echo $row['computador']?></td>
                <td><?php echo $row['observaciones']?></td>
                <td><?php echo $row['fecha']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
            });
        });
    </script>
</body>
</html>