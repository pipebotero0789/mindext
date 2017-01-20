<?php 
header('Content-Type: text/html; charset=ISO-8859-1');
include 'conexion.php';
$con=conexion();

$res=mysql_query("select * from zona order by `zon_nombre` asc",$con);
	echo '<option value="">--Zona--</option>';
while($fila=mysql_fetch_array($res)){
	echo '<option value='.$fila['id_zona'].'>'.$fila['zon_nombre'].'</option>';
	}
?>