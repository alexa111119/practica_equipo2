<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>

</head>
<body>

<h3> Vacantes </h3>

<table border="2">
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

     $Nombre_empresa=$_GET['Nombre_empresa'];
     $query = "SELECT * FROM vacantes WHERE Nombre_empresa like '%$Nombre_empresa%' or idVacantes='$Nombre_empresa' ";
     $data = mysqli_query($mysqli, $query);
     $total = mysqli_num_rows($data);

     if($total!=0){
         while($row=mysqli_fetch_assoc($data)){
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
             </tr>" ;
         }
     }
     else{
        ?>
        <script>
              Swal.fire({
                icon: 'warning',
                title: 'Nombre o id Invalido',
                text: 'Ops! Vacante no encontrada. Revise el nombre de la vacante o de la empresa'
            }).then(function () {
                window.location.href = 'VACANTES.php';
            })  
        </script>
 


     <?php
   
     }
     ?>
    </table>
    

</body>
</html>