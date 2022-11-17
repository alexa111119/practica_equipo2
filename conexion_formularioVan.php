<?php

$conexion = mysqli_connect('localhost', 'root', '04272931', 'practica_ipi')
  or die("Connection failed: " . mysqli_connect_error($mysqli));



  insertar($conexion);
  function insertar ($conexion){
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

        $consulta = "INSERT INTO vacantes(Nombre_empresa, Nombre_vacante, Funciones, Sueldo, Ubicacion, Tipo_contrato, Horario, Correo, Persona_contacto, Telefono) 
    VALUES('$nombre_empresa', '$vacante_nombre', '$funciones_puesto', '$sueldo', '$ubicacion', ' $tipo_contrato', '$horario', '$correo', '$Persona_contacto', '$telefono_contacto')";
  
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    }
    
   
  
echo "Connected successfully";

?>