<?php 
header('Content-Type: text/html; charset=ISO-8859-1');
include 'conexion.php';
$con=conexion();

$res=mysql_query("select * from ocupacion",$con);
	echo '<option value="">--Ocupacion--</option>';
while($fila=mysql_fetch_array($res)){
	echo '<option value='.$fila['id_ocupacion'].'>'.$fila['ocu_nombre'].'</option>';
	}
?>