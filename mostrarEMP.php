<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de empresas</title>
    <link rel="stylesheet" href="http://localhost/practica_equipo2/css/mostrarEMP.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <script type= "text/javascript" src="js/bootstrap.min.js"></script>
 <script type= "text/javascript" src="js/jquery-3.6.1.min"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
<br> 
<div class= "buscar">

<form action="updateEMP.php" method="post">
    <h3> Editar empresa:<h3> 
    <h4> Ingrese el id de la empresa que quiere modificar: </h4>
        <input type="text" name="id">
        <input type="submit" name="actualizar" value="Actualizar">
</form> 

<br>
<br>

<form action="buscarEMP.php" method="GET">
    <h3> Buscar empresa por nombre:<h3> 
    <h4> Ingrese el nombre de la empresa que desea buscar o de la vacante: </h4>
        <input type="text" name="Nombre_empresa">
        <input type="submit" name="buscar" value="Buscar">
</form> <br> <br>

<form action="pasantia.php">
<input type="submit" name="volver" value="Regresar a la pagina de pasantia">
</form>
<br>
<br>
</div>

<h2>Empresas registradas</h2>

<table border="2">
    <tr>
        <th>ID</th>
        <th>Empresa</th>
        <th>RNC</th>
        <th>Identidad</th>
        <th>Cuenta con un departamento de Formación</th>
        <th>Alcance</th>
        <th>Actividad económica</th>
        <th>Industria</th>
        <th>Tamaño</th>
        <th>Dirección</th>
        <th>Sector</th>
        <th>Sección</th>
        <th>Municipio</th>
        <th>Provincia</th>
        <th>País</th>
        <th>Teléfono principal</th>
        <th>Teléfono directo</th>
    </tr>

    <?php
    include_once 'conexionEMP.php';
    $query = "SELECT * FROM empresas";
    $data = mysqli_query($mysqli, $query);
    $total = mysqli_num_rows($data);

    if($total!=0){
        while($row=mysqli_fetch_assoc($data)){

            echo "<tr>
            <td>" . $row['idEmpresas'] . "</td>
            <td>" . $row['Nombre_empresa'] . "</td>
            <td>" . $row['RNC'] . "</td>
            <td>" . $row['Identidad'] . "</td>
            <td>" . $row['Formacion_empresa'] . "</td>
            <td>" . $row['Alcance_empresa'] . "</td>
            <td>" . $row['Actividad_economica'] . "</td>
            <td>" . $row['Industria'] . "</td>
            <td>" . $row['Tamaño'] . "</td>
            <td>" . $row['Direccion'] . "</td>
            <td>" . $row['Sector'] . "</td>
            <td>" . $row['Seccion'] . "</td>
            <td>" . $row['Municipio'] . "</td>
            <td>" . $row['Provincia'] . "</td>
            <td>" . $row['Pais'] . "</td>
            <td>" . $row['Telefono_principal'] . "</td>
            <td>" . $row['Telefono_directo'] . "</td>
            <td> <a href= 'deleteEMP.php?idEmpresas=$row[idEmpresas]'>Borrar</td>
            </tr>";;
        }
    }
    ?>
</table>



</body>
</html>