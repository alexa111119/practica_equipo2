<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practica_equipo2/css/formularioVANC.css">
    <title>Formulario de vacantes</title>
</head>

<body>
    

<form action="conexion_formularioVan.php " method="post">
 
    <h1>Formulario de vacantes: </h1>
    <label> Nombre de la empresa:</label>
    <input type="text"  class="field" name="nombre_empresa"> <br>  <br> 

  

    <label>Nombre de la vacante:</label>
    <input type="text" class="field" name="vacante_nombre"> <br> <br> 

 
    Funciones o perfil del puesto: <br>
    <textarea  COLS="40" ROWS="3" id="h" class="field" name="funciones_puesto"></textarea> <br> <br> 


    <label>Sueldo:</label>
    <input type="text" class="field" name="sueldo"> <br> <br> 
  
 
    <label>Ubicación:</label>
    <input type="text"  class="field" name="ubicacion"> <br> <br> 


  Tipo de contrato: 
<INPUT TYPE="radio" class="field" NAME="tipo_contrato">Temporal
 <INPUT TYPE="radio" class="field" NAME="tipo_contrato"> Fijo  
 <br> <br> 
 
    <label>Horario:</label> 
    <input type="text" class="field" name="horario"> <br> <br> 

    <label>Correo al que se debe enviar los curriculum:</label>
    <input type="email" id="mail" class="field" name="correo"> <br><br> 

 
    <label> Persona de contacto:</label>
    <input type="text" class="field" name="Persona_contacto"> <br> <br> 
 
    <label> Telefono del contacto:</label>
    <input type="text" class="field" name="telefono_contacto"> <br> <br> 

 <INPUT TYPE="submit" NAME="enviar" class="btn btn-green" VALUE="Enviar información">
</form>

</body>
</html>