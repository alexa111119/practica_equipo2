<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/practica_equipo2/css/formularioVANC.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
    <title>Formulario de vacantes</title>
</head>

<body>
    
<?php

require ("conexion.php");

$ID= $_REQUEST['id_empresa'];

$sql = "SELECT idEmpresas, Nombre_empresa FROM empresas WHERE idEmpresas=$ID;";

$result= mysqli_query($mysqli, $sql);
$resultCheck= mysqli_num_rows($result);

if ($resultCheck > 0 ){
    $row = mysqli_fetch_assoc($result);
    $id=$row ['idEmpresas'];
    $nom=$row ['Nombre_empresa'];
   



?>
<form action="InsertVacantes.php " method="post">
 
    <h1>Formulario de vacantes: </h1>

    <label> ID de la empresa:</label>
    <input type="text"  class="controls" name="id_emp"  value="<?php echo $id?>"> <br>  <br> 


    
    <label> Nombre de la empresa:</label>
    <input type="text"  class="controls" name="nombre_empresa" value="<?php echo $nom?>"> <br>  <br> 

  

    <label>Nombre de la vacante:</label>
    <input type="text" class="controls" name="vacante_nombre"> <br> <br> 

 
    Funciones o perfil del puesto: <br>
    <textarea  COLS="40" ROWS="3" id="h" class="controls" name="funciones_puesto"></textarea> <br> <br> 


    <label>Sueldo:</label>
    <input type="text" class="controls" name="sueldo"> <br> <br> 
  
 
    <label>Ubicación:</label>
    <input type="text"  class="controls" name="ubicacion"> <br> <br> 


  Tipo de contrato: 
<INPUT TYPE="radio" class="" NAME="tipo_contrato" value="Temporal">Temporal
 <INPUT TYPE="radio" class="" NAME="tipo_contrato" value="Fijo"> Fijo  
 <br> <br> 
 
    <label>Horario:</label> 
    <input type="text" class="controls" name="horario"> <br> <br> 

    <label>Correo al que se debe enviar los curriculum:</label>
    <input type="email" id="mail" class="controls" name="correo"> <br><br> 

 
    <label> Persona de contacto:</label>
    <input type="text" class="controls" name="Persona_contacto"> <br> <br> 
 
    <label> Telefono del contacto:</label>
    <input type="text" class="controls" name="telefono_contacto"> <br> <br> 

 <INPUT TYPE="submit" NAME="enviar" class="btn btn-green" VALUE="Enviar información">


</form>


<?php
}


else{
  ?>
  <script>
        Swal.fire({
          icon: 'warning',
          title: 'Empresa invalida',
          text: 'Empresa no registrada en el sistema, no se puede crear la vacante'
      }).then(function () {
          window.location.href = 'formulario.php';        })  
  </script>
 ;


<?php

}
?>


</div>
</body>
</html>