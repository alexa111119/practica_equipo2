<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento de vinculación laboral</title>
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <link rel="stylesheet" href="http://localhost/practica_equipo2/css/formularioEST.css" />

</head>

    <header> 
        <nav class="menu">
    <ul>
     <li><a href="index.php">Inicio </a></li>
     <li><a href="pasantia.php"> Pasantía </a></li>
     <li><a href="colaboradores.php">Colabodores </a></li>
     <li><a href="familia.php">Familia </a></li>
     </ul>    </nav>
    </header>

 
<body>


<h5>Formulario para estudiantes o egresados</h5>
<section class="formulario">
   
   


    
    <form action="" class="formulario" method="POST">
      <label for="Año de graduacion">Año de graduacion</label>
      <input type="number" name="año" id="año">

      <label for="">Institución educativa</label>
      <input type="text" name="institucion" id="insti"> 

      <label for="">Matricula</label>
      <input type="number" name="matricula" id="matri"> 
     
     

      <label for="">Cedula</label>
      <input type="number" name="cedula" id="ced"> 
     

      <label for="">Carrera Tecnica</label>
      <input type="text" name="carrera" id="ced"> 
     
     

      <label for="">Tecnico Basico</label>
      <input type="text" name="tecnico" id="ced"> 
     
     
      <label for="">Nombres</label>
      <input type="text" name="nombres" id="ced"> 
     
     
     
      <label for="">Apellidos</label>
      <input type="text" name="apellidos" id="ced"> 
     
     
      <label for="">Fecha de nacimiento</label>
      <input type="DATE" name="fecha" id="ced"> 
     
      <label for="">Sexo</label>
      <input type="text" name="sexo" id="ced"> 
     
     
      <label for="">Direccion</label>
      <input type="text" name="direccion" id="ced"> 

      <label for="">Sector</label>
      <input type="text" name="sector" id="ced"> 
     

      <label for="">Seccion</label>
      <input type="text" name="seccion" id="ced"> 
     
     
      <label for="">Municipio</label>
      <input type="text" name="municipio" id="ced"> 
     

     
      <label for="">Provincia</label>
      <input type="text" name="provincia" id="ced"> 
     

      <label for="">Pais</label>
      <input type="text" name="pais" id="ced"> 
     

      <label for="">Telefono Residencial</label>
      <input type="number" name="telefonoR" id="ced"> 
     
      <label for="">Telefono Movil</label>
      <input type="number" name="telefonoM" id="ced"> 
     



      <label for="">Email</label>
      <input type="text" name="email" id="ced"> 
     
      <label for="">Contraseña</label>
      <input type="password" name="contra" id="ced"> 
     

        
      <label for="">Confirma la contraseña</label>
      <input type="password" name="contra2" id="ced"> 
     

      <input type="submit" value="Enviar">

    </form>
  </section>

  <?php

$mysqli = new mysqli("localhost", "root", "04272931", "practica_ipi");
if ($mysqli->connect_errno) {
echo "Fallo al conectar a MySQL: (" . $mysqli
->connect_errno . ") " . $mysqli->connect_error;
}

insertar ($mysqli);
function insertar ($mysqli){


    $año= $_POST ['año'] ?? null;

    $institucion= $_POST ['institucion']?? null;
    
    $Matricula= $_POST ['matricula']?? null;
    
    $Cedula= $_POST ['cedula']?? null;

    $Carrera= $_POST ['carrera']?? null;

    $Tecnico= $_POST ['tecnico']?? null;

    $Nombre= $_POST ['nombres']?? null;

    $Apellido= $_POST ['apellidos']?? null;

    $fecha= $_POST ['fecha']?? null;

    
    $sexo= $_POST ['sexo']?? null;
    
    $direccion= $_POST ['direccion']?? null;
    
    $sector= $_POST ['sector']?? null;

    $seccion= $_POST ['seccion']?? null;
    $municipio= $_POST ['municipio']?? null;

    $provincia= $_POST ['provincia']?? null;

    
    $pais= $_POST ['pais']?? null;

    $telefonoR= $_POST ['telefonoR']?? null;
    $telefonoM= $_POST ['telefonoM']?? null;



    $email= $_POST ['email']?? null;

    $contra= $_POST ['contra']?? null;

    $consulta = "INSERT INTO estudiantes (Año_graduacion, Institucion, Matricula, Cedula, Carrera_tecnica, Tecnico_basico, Nombres, Apellidos, Fecha_nacimiento, Sexo, Direccion, Sector, Seccion, Municipio, Provincia, Pais_nacionalidad, Telefono_residencial, Telefono_movil, Email, Contraseña) VALUES('$año','$institucion','$Matricula','$Cedula','$Carrera','$Tecnico','$Nombre','$Apellido','$fecha','$sexo','$direccion','$sector', '$seccion','$municipio','$provincia','$pais', '$telefonoR', '$telefonoM','$email', '$contra')";

    

    
if($_POST["contra"]==$_POST["contra2"])
{
  mysqli_query($mysqli, $consulta);
    mysqli_close($mysqli);
    echo "Los datos fueron enviados";
}else{

echo "Las contraseñas no son iguales";
}

}


?>
</body>
</html>