<?php 

// Recibimos por POST los datos procedentes del formulario 

$nombre = $_POST["nombre"]; 
$apellido = $_POST["apellido"]; 
$tipodocumento = $_POST["tipodocumento"];
$genero = $_POST["genero"];
$num_documento = $_POST["num_documento"];
$ciudad = $_POST["ciudad"];
$departamento = $_POST["departamento"];
$zona = $_POST["zona"];
$estrato = $_POST["estrato"];
$num_celular = $_POST["num_celular"];
$correo = $_POST["correo"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$nom_acudiente1 = $_POST["nom_acudiente1"];
$ocupacion = $_POST["ocupacion"];
$parentesco = $_POST["parentesco"];
$nom_acudiente2 = $_POST["nom_acudiente2"];
$ocupacion1 = $_POST["ocupacion1"];
$parentesco1 = $_POST["parentesco1"];
$respuesta = $_POST["respuesta"];
$num_telefono = $_POST["num_telefono"];
$direccion = $_POST["direccion"];
$colegio = $_POST["colegio"];


if(	isset($nombre) && $nombre != "" &&
	isset($apellido) && $apellido != "" &&
	isset($tipodocumento) && $tipodocumento != "" &&
	isset($genero) && $genero != "" &&
	isset($num_documento) && $num_documento != ""  &&
	isset($ciudad) && $ciudad != "" &&
	isset($departamento) && $departamento != "" &&
	isset($zona) && $zona != "" &&
	isset($estrato) && $estrato != "" &&
	isset($num_celular) && $num_celular != "" &&
	isset($correo) && $correo != "" &&
	isset($fecha_nacimiento) && $fecha_nacimiento != "" &&
	isset($nom_acudiente1) && $nom_acudiente1 != "" &&
	isset($ocupacion) && $ocupacion != "" &&
	isset($parentesco) && $parentesco != "" &&
	isset($respuesta) && $respuesta != "" &&
	isset($num_telefono) && $num_telefono != "" &&
	isset($direccion) && $direccion != "" &&
	isset($colegio) && $colegio != ""){
	
// Abrimos la conexion a la base de datos 
include("conexion.php"); 
$con=conexion();

$guardar="INSERT INTO `oskarinm_mindext_premio`.`postulado` (`id_postulado`, `pos_nombre`, `pos_apellido`, `pos_documento`, `pos_genero`, `pos_telefono`, `pos_celular`, `pos_correo`, `pos_nomb_acudiente1`, `pos_nomb_acudiente2`, `pos_direccion`, `pos_pregunta`, `pos_fechanacimineto`, `pos_fechainscripcion`, `id_tipodocumento`, `id_zona`, `id_estrato`, `id_ocupacion`, `id_ciudad`, `pos_colegio`, `id_parentesco`, `id_ocupacion1`, `id_parentesco1`) VALUES (NULL, '$nombre', '$apellido', '$num_documento', '$genero', '$num_telefono', '$num_celular', '$correo', '$nom_acudiente1', '$nom_acudiente2', '$direccion', '$respuesta', '$fecha_nacimiento', CURRENT_TIMESTAMP, '$tipodocumento', '$zona', '$estrato', '$ocupacion', '$ciudad', '$colegio', '$parentesco', '$ocupacion1', '$parentesco1');";

 $result = mysql_query($guardar, $con);

// Confirmamos que el registro ha sido insertado con exito  
$resultado = "<div class='status alert alert-success'><p>$nombre $apellido te has registrado exitosamente, nos pondremos en contacto con tigo.</p></div>";;

echo $resultado;

}
else{
	$resultado = "<div class='status alert alert-danger'><p>Debe rellenar todos los campos.</p></div>";;

echo $resultado;
}
?>