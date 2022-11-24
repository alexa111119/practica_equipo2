<?php
include_once 'conexionEMP.php';

$id =$_GET['idEmpresas'];
$query = "DELETE FROM empresas WHERE idEmpresas = '$id'";

$data = mysqli_query($mysqli, $query);
header("location: mostrarEMP.php?update=InsertaID");
?>