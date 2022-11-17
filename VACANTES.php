<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2> Lista de vacantes:</h2>

<table border="1" cellspacing="2" cellpadding="2"> 

 <tr> 
    <th>idVacantes</th>
    <th>Nombre de la empresa</th>
    <th>Nombre de la vacante</th>
    <th>Funciones o perfil del puesto</th>
    <th>Sueldo</th>
    <th>Ubicacion</th>
    <th>Tipo del contrato</th>
    <th>Horario</th>
    <th>Correo del responsable</th>
    <th>Persona de contacto</th>
    <th>Telefono del contacto</th>
 </tr>

<?php
include_once 'conexion_formularioVan.php';
$query = "SELECT * FROM vacantes";
 $data = mysqli_query($mysqli, $query);
 $total = mysqli_num_rows($data);

 if($total!=0){
    while($row=mysqli_fetch_assoc($data)) {

        echo "<tr> 
        <td>" .$row['idVacantes']. "</td> 
        <td>"  .$row['Nombre_empresa']. "</td>
         <td>" .$row['Nombre_vacante']. "</td> 
         <td>"  .$row['Funciones']. "</td> 
         <td>" .$row['Sueldo']. "</td> 
        <td>"  .$row['Ubicacion']. "</td> 
         <td>"  .$row['Tipo_contrato']. "</td> 
         <td>" .$row['Horario']. "</td> 
        <td>"  .$row['Correo']. "</td>
         <td>" .$row['Persona_contacto']. "</td> 
         <td>"  .$row['Telefono']. "</td> 
         <td> <a href= 'DeleteVacantes.php?idVacantes=$row[idVacantes]'>Borrar</td>
         </tr>" ;
    }
 }
 ?> 
 <table>

 <br> 

 <form action="updateVacantes.php" method="post">

<h3> Editar vacante:<h3> 

<h4> Ingrese el id de la vacante que quiere modificar: </h4>
<input type="text" name="id">
<input type="submit" name="actualizar" value="Actualizar">
</form> <br> <br>

<form action="BuscarVacantes.php" method="GET">

<h3> Buscar vacante por el nombre de la empresa:<h3> 

<h4> Ingrese el nombre de la empresa con la vacante que desea buscar o de la vacante: </h4>
<input type="text" name="Nombre_empresa">
<input type="submit" name="buscar" value="Buscar">
</form>


</body>
</html>



