<?php 
header('Content-Type: text/html; charset=ISO-8859-1');
include 'conexion.php';
$con=conexion();

$res=mysql_query("select * from estrato",$con);
	echo '<option value="">--Estrato--</option>';
while($fila=mysql_fetch_array($res)){
	echo '<option value='.$fila['id_estrato'].'>'.$fila['est_nombre'].'</option>';
	}
?>