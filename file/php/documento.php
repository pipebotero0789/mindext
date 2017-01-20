<?php 
header('Content-Type: text/html; charset=ISO-8859-1');
include 'conexion.php';
$con=conexion();

$res=mysql_query("select * from tipo_documento",$con);
	echo '<option value="">--Tipo Documento--</option>';
while($fila=mysql_fetch_array($res)){
	echo '<option value='.$fila['id_tipodocumento'].'>'.$fila['tdoc_nombre'].'</option>';
	}
?>