<?php

function conexion(){

$con = mysql_connect("67.23.248.81","oskarinm_premio","221590jho");

if (!$con){

die('Could not connect: ' . mysql_error());
}

mysql_select_db("oskarinm_mindext_premio", $con);

return($con);

}

?>
