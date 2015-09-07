<?php
require('class.estacionamiento.php');
$estacionar=$_POST['estacionar'];
$patente=$_POST['patente'];

if ($_POST['estacionar']=="ingreso") {
	Estacionamiento::Guardar($patente);
}
elseif ($_POST['estacionar']=="egreso") {
	echo $_POST['estacionar'];
}else{
	header("location:index.php");
}
?>