<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario empresa</title>
    <link rel="stylesheet" type="text/css" href="css/formularioVANC.css">
</head>
<body>

<h3>Empresa</h3>

<form action=" " method="post">
 <ul>
  <li>
    <label>Nombre de la empresa:</label>
    <input type="text" id="name" name="nombre_empresa">
  </li>

  
  <li>
    <label>Nombre de la vacante:</label>
    <input type="text" id="name" name="vacante_nombre" width="90">
  </li>

  <li>
    <label>Funciones o perfil del puesto:</label>
    <textarea id="h" name="perfil_puesto"></textarea>
    
  </li>

  <li>
    <label>Sueldo:</label>
    <input type="text" id="name" name="sueldo">
  </li>
  
  <li>
    <label>Ubicación:</label>
    <input type="text" id="mail" name="ubicacion">
  </li>

  <h4> Tipo de contrato: </h4> 
  <INPUT TYPE="radio" VALUE="tipo_contrato">Temporal

<INPUT TYPE="radio" NAME="tipo_contrato">Fijo

  <li>
    <label>Horario:</label>
    <input type="text" id="name" name="horario">
  </li>

  <li>
    <label>Correo al que se debe enviar los curriculum:</label>
    <input type="email" id="mail" name="correo">
  </li>

  <li>
    <label> Persona de contacto:</label>
    <input type="text"  name="contacto">
  </li>
 

 </ul>
</form>
    
</body>
</html>