<?php

include_once 'conexionEMP.php';


$id = $_POST['id'];

if(isset($_POST['update'])){

    $id = $_POST['id'];

    $query = "UPDATE empresas SET Nombre_empresa='$_POST[Nombre_empresa]', RNC='$_POST[RNC]',Identidad='$_POST[Identidad]',
    Formacion_empresa='$_POST[Formacion_empresa]',Alcance_empresa='$_POST[Alcance_empresa]',Actividad_economica='$_POST[Actividad_economica]',
    Industria='$_POST[Industria]',Tamaño='$_POST[Tamaño]',Direccion='$_POST[Direccion]',Sector='$_POST[Sector]',Seccion='$_POST[Seccion]',
    Municipio='$_POST[Municipio]',Provincia='$_POST[Provincia]',Pais='$_POST[Pais]',Telefono_principal='$_POST[Telefono_principal]',Telefono_directo='$_POST[Telefono_directo]' where idEmpresas='$_POST[id]'";
    mysqli_query($mysqli, $query);
}


header("location: mostrarEMP.php?insert=success"); 

?>
