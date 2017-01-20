<?php 
header('Content-Type: text/html; charset=ISO-8859-1');
include 'conexion.php';
$con=conexion();

$res=mysql_query("select * from parentesco order by par_nombre asc",$con);
	echo '<option value="">--Parentesco--</option>';
while($fila=mysql_fetch_array($res)){
	echo '<option value='.$fila['id_parentesco'].'>'.$fila['par_nombre'].'</option>';
	}
?>