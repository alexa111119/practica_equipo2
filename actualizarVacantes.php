<?php

include_once 'conexion_formularioVan.php';
$id = $_POST['id'];

if(isset($_POST['update'])){

    $id = $_POST['id'];

    $query = "UPDATE vacantes SET Nombre_empresa='$_POST[Nombre_empresa]',Nombre_vacante='$_POST[Nombre_vacante]',Funciones='$_POST[Funciones]',
    Sueldo='$_POST[Sueldo]',Ubicacion='$_POST[Ubicacion]',Tipo_contrato='$_POST[Tipo_contrato]',
    Horario='$_POST[Horario]',Correo='$_POST[Correo]',Persona_contacto='$_POST[Persona_contacto]',Telefono='$_POST[Telefono]' where idVacantes='$_POST[id]';";
    mysqli_query($mysqli, $query);
}


header("location: VACANTES.php?insert=success"); 

?>
