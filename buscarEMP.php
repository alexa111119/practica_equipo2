<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>

</head>
<body>

<h3> Empresas </h3>

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

    $Nombre_empresa=$_GET['Nombre_empresa'];
    $query = "SELECT * FROM empresas WHERE Nombre_empresa like '%$Nombre_empresa%' or idEmpresas='$Nombre_empresa' ";
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
            </tr>";;
        }
    }
    else{
    ?>

        <script>
              Swal.fire({
                icon: 'warning',
                title: 'Nombre o id Invalido',
                text: 'Ops! Empresa no encontrada. Revise el nombre de la empresa'
            }).then(function () {
                window.location.href = 'mostrarEMP.php';
            })  


            <?php
   
     }
     ?>
        </script>
    </table>
</body>
</html>