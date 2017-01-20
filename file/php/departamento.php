<?php 
header('Content-Type: text/html; charset=ISO-8859-1');
include 'conexion.php';
$con=conexion();

$res=mysql_query("select * from departamento order by id_nombre_departamento ASC",$con);
	echo '<option value="">--Departamento--</option>';
while($fila=mysql_fetch_array($res)){
	echo '<option value='.$fila['id_departamento'].'>'.$fila['id_nombre_departamento'].'</option>';
	}
?>