<?php 
header('Content-Type: text/html; charset=ISO-8859-1');
include 'conexion.php';
$con=conexion();
$id_departamento=$_GET['id_departamento'];
$res=mysql_query("select * from ciudad where id_estrato = $id_departamento" ,$con);
while($fila=mysql_fetch_array($res)){
	echo '<option value='.$fila['id_ciudad'].'>'.$fila['ciu_nombre'].'</option>';
	}
?>