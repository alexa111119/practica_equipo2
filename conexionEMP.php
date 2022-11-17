<?php
$mysqli = new mysqli("localhost", "root", "", "practica_ipi");

if ($mysqli->connect_errno) {
  echo "Diantre mano tu ta salao :(" . $mysqli -> connect_errno . ")"
  . $mysqli->connect_error;
}
echo "Connected successfully";
?>