<?php
require('class.estacionamiento.php');
$estacionar=$_POST['estacionar'];
$patente=$_POST['patente'];

if ($_POST['estacionar']=="ingreso") {
	Estacionamiento::Guardar($patente);
}
elseif ($_POST['estacionar']=="egreso") {
	$datos=Estacionamiento::Leer();
	echo "<pre>";
	var_dump($datos);
	echo "</pre>";
}else{
	header("location:index.php");
}
?>