<?php

$conexion = mysqli_connect('localhost', 'root', '', 'practica_ipi')
  or die("Connection failed: " . mysqli_connect_error($mysqli));


  insertar($conexion);
  function insertar ($conexion) {
    $nombre_empresa = $_POST['nombre_empresa'] ?? null;
    $rnc = $_POST['rnc'] ?? null;
    $identidad = $_POST['identidad'] ?? null;
    $formacion = $_POST['formacion'] ?? null;
    $alcance = $_POST['alcance'] ?? null;
    $actividad = $_POST['actividad'] ?? null;
    $industria = $_POST['industria'] ?? null;
    $tamano = $_POST['tamano'] ?? null;
    $direccion = $_POST['direccion'] ?? null;
    $sector = $_POST['sector'] ?? null;
    $seccion = $_POST['seccion'] ?? null;
    $municipio = $_POST['municipio'] ?? null;
    $provincia = $_POST['provincia_id'] ?? null;
    $pais = $_POST['pais_id'] ?? null;
    $tel_pri = $_POST['tel_pri'] ?? null;
    $tel_dir = $_POST['tel_dir'] ?? null;
    $email = $_POST['email'] ?? null;
    $contrasena = $_POST['contrasena'] ?? null;


    $consulta = "INSERT INTO empresas(Nombre_empresa, RNC, Identidad, Formacion_empresa, Alcance_empresa, Actividad_economica, Industria, Tamaño, Direccion, Sector, Seccion, Municipio, Provincia, Pais, Telefono_principal, Telefono_directo, Email, Contraseña) 
    VALUES('$nombre_empresa', '$rnc', '$identidad', '$formacion', '$alcance', '$actividad', '$industria', '$tamano', '$direccion', '$sector', '$seccion', '$municipio', '$provincia', '$pais', '$tel_pri', '$tel_dir', '$email', '$contrasena');";
    
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
   
  }
echo "Connected successfully";

?>