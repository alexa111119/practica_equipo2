<?php
$servidor="Localhost";
$nombreusuario="root";
$password="04272931";
$basedatos="practica_ipi";

$mysqli = new mysqli($servidor, $nombreusuario, $password, $basedatos);

if ($mysqli->connect_errno) {
  die( "Diantre mano tu ta salao" . $mysqli -> connect_error);
}
?>