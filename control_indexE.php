<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/practica_equipo2/css/controlE.css" />
    <title>Document</title>
</head>
<body>

<div class="buscar">
<h3>Buscar en la tabla</h3>
<h6>Ingresa el nombre del estudiante</h6>
<form action="buscarE.php" method= "POST">
<input type="text"name="nombre">
<input type="submit" name= "enviar" value="Buscar">
<br>
<br>


<br>
<br>
</div>
</form>




</form>
<br>
<br>
<div class="tabla">
    <h4>Estudiantes registrados</h4>
<table>
    

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

$query = "SELECT * FROM estudiantes";
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







<td> <a href= 'ActualizarE.php?id=$row[ID_estudiantes]'>Actualizar </td> 
<td> <a href= 'eliminarE.php?id=$row[ID_estudiantes]'>Borrar </td> </tr>";;

}
}

?>
</div>
</table>

</body>
</html>
