<?php
include_once 'conexion_formularioVan.php';

$id =$_GET['idVacantes'];
$query = "DELETE FROM vacantes WHERE idVacantes = '$id'";

$data = mysqli_query($mysqli, $query);
header("location: VACANTES.php?update=InsertaID");
?>