<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>


<table border="2">

    <tr>
    <th>ID</th>
    <th>Año de graduacion</th>
    <th>Institucion</th>
    <th>Cedula</th>
    <th>Matricula</th>
    <th>Carrera tecnica</th>
    <th>Tecnico basico</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Fecha de nacimiento</th>
    <th>Sexo</th>
    <th>Direccion</th>
    <th>Sector</th>
    <th>Seccion</th>
    <th>Municipio</th>
    <th>Provincia</th>
  <th>Pais de nacionalidad</th>
  <th>Telefono residencial</th>
<th>Telefono movil</th>
<th>Email</th>
<th>Contraseña</th>
    <?php

require("conexion.php");

$nombre= $_REQUEST['nombre'];

$query = "SELECT * FROM estudiantes WHERE Nombres LIKE'%$nombre%'";

$data =mysqli_query($mysqli, $query);
$total =mysqli_num_rows($data);

if($total!=0){
    while($row=mysqli_fetch_assoc($data)){
echo "<tr>

<td>" . $row ['ID_estudiantes'] . "</td>
<td>" . $row ['Año_graduacion'] . "</td>
<td>" . $row ['Institucion'] . "</td>
<td>" . $row ['Cedula'] . "</td>
<td>" . $row ['Matricula'] . "</td>
<td>" . $row ['Carrera_tecnica'] . "</td>
<td>" . $row ['Tecnico_basico'] . "</td>
<td>" . $row ['Nombres'] . "</td>
<td>" . $row ['Apellidos'] . "</td>
<td>" . $row ['Fecha_nacimiento'] . "</td>
<td>" . $row ['Sexo'] . "</td>
<td>" . $row ['Direccion'] . "</td>
<td>" . $row ['Sector'] . "</td>
<td>" . $row ['Seccion'] . "</td>
<td>" . $row ['Municipio'] . "</td>
<td>" . $row ['Provincia'] . "</td>
<td>" . $row ['Pais_nacionalidad'] . "</td>
<td>" . $row ['Telefono_residencial'] . "</td>
<td>" . $row ['Telefono_movil'] . "</td>
<td>" . $row ['Email'] . "</td>
<td>" . $row ['Contraseña'] . "</td>





<td> <a href= 'eliminarE.php?id=$row[ID_estudiantes]'>Borrar </td> </tr>";;

}
}

else{
    ?>
    <script>
          Swal.fire({
            icon: 'warning',
            title: 'Nombre invalido',
            text: 'Registro no encontrado, revise el nombre'
        }).then(function () {
            window.location.href = 'control_indexE.php';        })  
    </script>
   ;


 <?php

 }
 ?>


</table>
</body>
</html>


   
