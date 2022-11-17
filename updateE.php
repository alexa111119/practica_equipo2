<?php
 require ("conexion.php");
 

 

 //$id= $_POST ['id'];

 $query = "UPDATE `estudiantes` SET Año_graduacion= '$_POST[an]', Institucion= '$_POST[instituto]' , Cedula= '$_POST[cedula]'
 , Matricula= '$_POST[matricula]', Carrera_tecnica= '$_POST[carrera]', Tecnico_basico= '$_POST[tecnico]', Nombres= '$_POST[nombre]'
 , Apellidos= '$_POST[apellido]', Fecha_nacimiento= '$_POST[fecha]', Sexo= '$_POST[sexo]', Direccion= '$_POST[direccion]', 
 Sector= '$_POST[sector]', Seccion= '$_POST[seccion]', Municipio= '$_POST[municipio]', Provincia= '$_POST[provincia]', 
 Pais_nacionalidad= '$_POST[pais]', Telefono_residencial= '$_POST[tR]', Telefono_movil= '$_POST[tM]', Email= '$_POST[email]',
 Contraseña = '$_POST[contra]'where ID_estudiantes= '$_POST[id]'";


 mysqli_query($mysqli, $query);

 header ("location: control_indexE.php?insert=success");

?>