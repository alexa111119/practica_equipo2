
<?php
 require ("conexion.php");
 

 
      $ID= $_REQUEST['id'];

      $query = "DELETE FROM estudiantes where ID_estudiantes= $ID";
     
 //    echo $query; 

      mysqli_query($mysqli, $query);


      header ("location: control_indexE.php?insert=success");



?>