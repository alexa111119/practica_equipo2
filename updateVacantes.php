<?php
include_once 'conexion_formularioVan.php';


if(isset($_POST['actualizar'])){
$id = $_POST['id'];

$sql = "SELECT * FROM vacantes where idVacantes=$id;";

$result = mysqli_query($mysqli, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    $row = mysqli_fetch_assoc($result);
    $Nombre_empresa=$row['Nombre_empresa'];
    $Nombre_vacante=$row['Nombre_vacante'];
    $Funciones=$row['Funciones'];
    $Sueldo=$row['Sueldo'];
    $Ubicacion=$row['Ubicacion'];
    $Tipo_contrato=$row['Tipo_contrato'];
    $Horario=$row['Horario'] ;
    $Correo=$row['Correo'];
    $Persona_contacto=$row['Persona_contacto'];
    $Telefono=$row['Telefono'];
}
?>

<form action="actualizarVacantes.php" method="post">
<label for="idVacante">idVacante: </label>
<input type="text" name="id"  value="<?php echo $id?>" ><br><br>

<label for="nombre">Nombre de la empresa</label>
<input type="text" name="Nombre_empresa"  value="<?php echo $Nombre_empresa?>" ><br><br>

<label for="nombre">Nombre de la vacante</label>
<input type="text" name="Nombre_vacante"  value="<?php echo $Nombre_vacante?>" ><br><br>

<label for="perfil">Funciones o perfil del puesto</label>
<input type="text" name="Funciones"  value="<?php echo $Funciones?>" ><br><br>

<label for="sueldo">Sueldo </label>
<input type="text" name="Sueldo"  value="<?php echo $Sueldo?>" ><br><br>

<label for="ubicacion">Ubicacion</label>
<input type="text" name="Ubicacion"  value="<?php echo $Ubicacion?>" ><br><br>

<label for="contrato">Tipo del contrato</label>
<input type="text" name="Tipo_contrato"  value="<?php echo $Tipo_contrato ?>" ><br><br>

<label for="horario">Horario</label>
<input type="text" name="Horario"  value="<?php echo $Horario?>" ><br><br>

<label for="correo">Correo del responsable </label>
<input type="text" name="Correo"  value="<?php echo $Correo?>" ><br><br>

<label for="contacto">Persona de contacto</label>
<input type="text" name="Persona_contacto"  value="<?php echo $Persona_contacto?>" ><br><br>

<label for="telefono">Telefono del contacto</label>
<input type="text" name="Telefono"  value="<?php echo $Telefono?>" ><br><br>

<input type="submit" name="update" value=" Actualizar ">
</form>

<?php 

}else{
    header("location: VACANTES.php?update=InsertaID"); 
}
?>