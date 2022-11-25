<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/formulario.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <script type= "text/javascript" src="js/bootstrap.min.js"></script>
 <script type= "text/javascript" src="js/jquery-3.6.1.min"></script>
</head>

<header> 
<?php
include_once 'menu.php';
?>
</header>
<body>
    <br>
    <br>
<div class="card"style="width: 16rem";>
  <img src="imagenes/estudiantes.png" class="card-img-top" alt="...">
  
  <div class="card-body">
    <h5 class="card-title">Estudiantes o egresados</h5>
    <p class="card-text">   </p>
  </div>
  
  <div class="card-body">
    <a href="formularioEST.php" class="card-link">Formulario de registros</a>
    <a href="control_indexE.php" class="card-link">Control de estudiantes</a>
  </div>
</div>



<div class="card"style="width: 16rem";>
  <img src="imagenes/empresa.png" class="card-img-top" alt="...">
  
  <div class="card-body">
    <h5 class="card-title">Empresas</h5>
    <p class="card-text">  </p>
  </div>
  
  <div class="card-body">
    <a href="formularioEMP.php" class="card-link">Formulario de registros</a>
    <a href="mostrarEMP.php" class="card-link">Control de empresas</a>
  </div>
</div>



<div class="card"style="width: 16rem";>
  <img src="imagenes/vacante.png" class="card-img-top" alt="...">
  
  <div class="card-body">
    <h5 class="card-title">Vacantes</h5>
    <p class="card-text"> </p>
  </div>
  
  <div class="card-body">
    <a href="formulario.php" class="card-link">Formulario de registros</a>
    <a href="VACANTES.php" class="card-link">Control de vacantes</a>
  </div>
</div>



</body>

</html>