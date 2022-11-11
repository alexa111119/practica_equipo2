<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/practica_equipo2/css/formularioVANC.css">
    <title>Formulario de vacantes</title>
</head>

<body>
    

<form action="conexion_formularioVan.php " method="post">
 
    <label>Nombre de la empresa:</label>
    <input type="text" id="name" name="nombre_empresa"> <br>  

  

    <label>Nombre de la vacante:</label>
    <input type="text" id="name" name="vacante_nombre"> <br>

 
    Funciones o perfil del puesto: <br>
    <textarea  COLS="40" ROWS="4" id="h" name="funciones_puesto"></textarea> <br>


    <label>Sueldo:</label>
    <input type="text" id="name" name="sueldo"> <br>
  
 
    <label>Ubicación:</label>
    <input type="text" id="mail" name="ubicacion"> <br>


  Tipo de contrato: 
  <INPUT TYPE="radio" NAME="tipo_contrato">Temporal
 <INPUT TYPE="radio" NAME="tipo_contrato"> Fijo  
 <br>
 

    <label>Horario:</label>
    <input type="text" id="name" name="horario"> <br>

    <label>Correo al que se debe enviar los curriculum:</label>
    <input type="email" id="mail" name="correo"> <br>

 
    <label> Persona de contacto:</label>
    <input type="text"  name="Persona_contacto"> <br>
 
    <label> Telefono del contacto:</label>
    <input type="text"  name="telefono_contacto"> <br>

 <INPUT TYPE="submit" NAME="enviar" VALUE="Enviar información">
</form>

</body>
</html>