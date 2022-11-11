<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de vacantes</title>
    <link rel="stylesheet" type="text/css" href="css/formularioVANC.css">
</head>

<body>
    
<section class="form-register">

<form action=" " method="post">
 <ul>
  <li>
    <label>Nombre de la empresa:</label>
    <input type="text" id="name" name="nombre_empresa">
  </li> <br>  

  
  <li>
    <label>Nombre de la vacante:</label>
    <input type="text" id="name" name="vacante_nombre">
  </li> <br>

  <li>
    Funciones o perfil del puesto: <br>
    <textarea  COLS="40" ROWS="4" id="h" name="perfil_puesto"></textarea>
  </li> <br>

  <li>
    <label>Sueldo:</label>
    <input type="text" id="name" name="sueldo">
  </li> <br>
  
  <li>
    <label>Ubicación:</label>
    <input type="text" id="mail" name="ubicacion">
  </li> <br>

  <li>
  Tipo de contrato: 
  <INPUT TYPE="radio" VALUE="tipo_contrato">Temporal
<INPUT TYPE="radio" NAME="tipo_contrato"> Fijo 
</li> <br>
 


  <li>
    <label>Horario:</label>
    <input type="text" id="name" name="horario">
  </li> <br>

  <li>
    <label>Correo al que se debe enviar los curriculum:</label>
    <input type="email" id="mail" name="correo">
  </li> <br>

  <li>
    <label> Persona de contacto:</label>
    <input type="text"  name="contacto">
  </li> <br>
 </ul>

 <INPUT TYPE="button" NAME="actualizar" VALUE="Enviar información">
</form>
</section>

</body>
</html>