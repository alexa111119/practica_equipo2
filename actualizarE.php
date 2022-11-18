
    <link rel="stylesheet" href="http://localhost/practica_equipo2/css/actualizarE.css" />
<?php

require ("conexion.php");

$ID= $_REQUEST['id'];

$sql = "SELECT * FROM estudiantes WHERE ID_estudiantes=$ID;";

$result= mysqli_query($mysqli, $sql);
$resultCheck= mysqli_num_rows($result);

if ($resultCheck > 0 ){
    $row = mysqli_fetch_assoc($result);
    $id=$row ['ID_estudiantes'];
    $An=$row ['Año_graduacion'];
    $insti=$row ['Institucion'];
    $cedu=$row ['Cedula'];
    $matri=$row ['Matricula'];
    $carr=$row ['Carrera_tecnica'];
    $tec=$row ['Tecnico_basico'];
    $nom=$row ['Nombres'];
    $ap=$row ['Apellidos'];
    $nac=$row ['Fecha_nacimiento'];
    $sexo=$row ['Sexo'];
    $dire=$row ['Direccion'];
    $sector=$row ['Sector'];
    $seccion=$row ['Seccion'];
    $municipio=$row ['Municipio'];
    $provincia=$row ['Provincia'];
    $pais_nac=$row ['Pais_nacionalidad'];
    $telefono_residencial=$row ['Telefono_residencial'];
    $telefono_movil=$row ['Telefono_movil'];
    $email=$row ['Email'];
    $contra=$row ['Contraseña'];
}




?>
<h3>Edite los datos que desea actualizar</h3>
<form action="updateE.php" class="formulario" method="POST">



<label for="">ID</label>
      <input type="text" name="id" id="id" value="<?php echo $id?>"> <br><br>
<label for="">Año de graduacion </label>
      <input type="text" name="an" id="id" value="<?php echo $An?>"> <br><br>

      <label for="">Institucion</label>
      <input type="text" name="instituto" id="id" value="<?php echo $insti?>"> <br><br>

      <label for="">Cedula</label>
      <input type="text" name="cedula" id="id" value="<?php echo $cedu?>"> <br><br>


      <label for="">Matricula</label>
      <input type="text" name="matricula" id="id" value="<?php echo $matri?>"> <br><br>


      <label for="">Carrera tecnica</label>
      <input type="text" name="carrera" id="id" value="<?php echo $carr?>"> <br><br>

      
      <label for="">Tecnico basico</label>
      <input type="text" name="tecnico" id="id" value="<?php echo $tec?>"> <br><br>


      
      <label for="">Nombres</label>
      <input type="text" name="nombre" id="id" value="<?php echo $nom?>"> <br><br>


      
      <label for="">Apellidos</label>
      <input type="text" name="apellido" id="id" value="<?php echo $ap?>"> <br><br>


      
      <label for="">Fecha de nacimiento</label>
      <input type="text" name="fecha" id="id" value="<?php echo $nac?>"> <br><br>

      
      <label for="">Sexo</label>
      <input type="text" name="sexo" id="id" value="<?php echo $sexo?>"> <br><br>




      
      <label for="">Direccion</label>
      <input type="text" name="direccion" id="id" value="<?php echo $dire?>"> <br><br>


  
      <label for="">Sector</label>
      <input type="text" name="sector" id="id" value="<?php echo $sector?>"> <br><br>


  
      <label for="">Seccion</label>
      <input type="text" name="seccion" id="id" value="<?php echo $seccion?>"> <br><br>


  
      <label for="">Municipio</label>
      <input type="text" name="municipio" id="id" value="<?php echo $municipio?>"> <br><br>


      <label for="">Provincia</label>
      <input type="text" name="provincia" id="id" value="<?php echo $provincia?>"> <br><br>


      <label for="">Pais de nacionalidad</label>
      <input type="text" name="pais" id="id" value="<?php echo $pais_nac?>"> <br><br>



      <label for="">Telefono de residencial</label>
      <input type="text" name="tR" id="id" value="<?php echo $telefono_residencial?>"> <br><br>


      <label for="">Telefono movil</label>
      <input type="text" name="tM" id="id" value="<?php echo $telefono_movil?>"> <br><br>


      

      <label for="">Email</label>
      <input type="text" name="email" id="id" value="<?php echo $email?>"> <br><br>

      

      <label for="">Contraseña</label>
      <input type="text" name="contra" id="id" value="<?php echo $contra?>"> <br><br>
<input type="submit" value="Enviar">

</form>


</section>
