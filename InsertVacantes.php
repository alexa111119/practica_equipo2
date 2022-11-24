<?php

include_once 'conexion_formularioVan.php';

  insertar($mysqli);
  function insertar ($mysqli){
    $id_empresa = $_POST['id_emp'] ?? null;
    $nombre_empresa = $_POST['nombre_empresa'] ?? null;
    $vacante_nombre = $_POST['vacante_nombre'] ?? null;
    $funciones_puesto = $_POST['funciones_puesto'] ?? null;
    $sueldo = $_POST['sueldo'] ?? null;
    $ubicacion = $_POST['ubicacion'] ?? null;
    $tipo_contrato = $_POST['tipo_contrato'] ?? null;
    $horario = $_POST['horario'] ?? null;
    $correo = $_POST['correo']?? null;
    $Persona_contacto = $_POST['Persona_contacto']?? null;
    $telefono_contacto = $_POST['telefono_contacto']?? null;


    $sqlinsert = "INSERT INTO vacantes VALUES(0,'$id_empresa','$nombre_empresa', '$vacante_nombre', '$funciones_puesto', '$sueldo', '$ubicacion', ' $tipo_contrato', '$horario', '$correo', '$Persona_contacto', '$telefono_contacto');";
  
   mysqli_query($mysqli, $sqlinsert);
  }
?>