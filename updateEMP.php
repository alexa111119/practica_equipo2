<?php
include_once 'conexionEMP.php';


if(isset($_POST['actualizar'])){
$id = $_POST['id'];

$sql = "SELECT * FROM empresas where idEmpresas=$id;";

$result = mysqli_query($mysqli, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    $row = mysqli_fetch_assoc($result);
    $Nombre_empresa=$row['Nombre_empresa']?? NULL;
    $RNC=$row['RNC']?? NULL;
    $Identidad=$row['Identidad']?? NULL;
    $Formacion_empresa=$row['Formacion_empresa']?? NULL;
    $Alcance_empresa=$row['Alcance_empresa']?? NULL;
    $Actividad_economica=$row['Actividad_economica']?? NULL;
    $Industria=$row['Industria']?? NULL;
    $Tamaño=$row['Tamaño']?? NULL;
    $Direccion=$row['Direccion']?? NULL;
    $Sector=$row['Sector']?? NULL;
    $Seccion=$row['Seccion']?? NULL;
    $Municipio=$row['Municipio']?? NULL;
    $Provincia=$row['Provincia']?? NULL;
    $Pais=$row['Pais']?? NULL;
    $Telefono_principal=$row['Telefono_principal']?? NULL;
    $Telefono_directo=$row['Telefono_directo']?? NULL;
    $Email=$row['Email']?? NULL;
    $Contraseña=$row['Contraseña']?? NULL;
}
?>

<form action="actualizarEMP.php" method="post">
<label for="idEmpresas">idEmpresa: </label>
<input type="text" name="id"  value="<?php echo $id?>" ><br><br>

<label for="Nombre_empresa">Nombre de la empresa</label>
<input type="text" name="Nombre_empresa"  value="<?php echo $Nombre_empresa?>" ><br><br>

<label for="RNC">RNC</label>
<input type="text" name="RNC"  value="<?php echo $RNC?>" ><br><br>

<label for="perfil">Identidad </label>
<input type="text" name="Identidad"  value="<?php echo $Identidad?>" ><br><br>

<label for="sueldo">Cuenta con un departamento de Formación </label>
<input type="text" name="Formacion_empresa"  value="<?php echo $Formacion_empresa?>" ><br><br>

<label for="ubicacion">Alcance </label>
<input type="text" name="Alcance_empresa"  value="<?php echo $Alcance_empresa?>" ><br><br>

<label for="contrato">Actividad económica </label>
<input type="text" name="Actividad_economica"  value="<?php echo $Actividad_economica ?>" ><br><br>

<label for="horario">Industria </label>
<input type="text" name="Industria"  value="<?php echo $Industria?>" ><br><br>

<label for="correo">Tamaño </label>
<input type="text" name="Tamaño"  value="<?php echo $Tamaño?>" ><br><br>

<label for="contacto">Dirección </label>
<input type="text" name="Direccion"  value="<?php echo $Direccion?>" ><br><br>

<label for="telefono">Sector</label>
<input type="text" name="Sector"  value="<?php echo $Sector?>" ><br><br>

<label for="telefono">Sección</label>
<input type="text" name="Seccion"  value="<?php echo $Seccion?>" ><br><br>

<label for="telefono">Municipio</label>
<input type="text" name="Municipio"  value="<?php echo $Municipio?>" ><br><br>

<label for="telefono">Provincia</label>
<input type="text" name="Provincia"  value="<?php echo $Provincia?>" ><br><br>

<label for="telefono">País</label>
<input type="text" name="Pais"  value="<?php echo $Pais?>" ><br><br>

<label for="telefono">Telefono principal</label>
<input type="text" name="Telefono_principal"  value="<?php echo $Telefono_principal?>" ><br><br>

<label for="telefono">Telefono directo</label>
<input type="text" name="Telefono_directo"  value="<?php echo $Telefono_directo?>" ><br><br>

<label for="telefono">Email</label>
<input type="text" name="Email"  value="<?php echo $Email?>" ><br><br>

<label for="telefono">Contraseña</label>
<input type="text" name="Contraseña"  value="<?php echo $Contraseña?>" ><br><br>

<input type="submit" name="update" value=" Actualizar ">
</form>

<?php 

}else{
    header("location: mostrarEMP.php?update=InsertaID"); 
}
?>