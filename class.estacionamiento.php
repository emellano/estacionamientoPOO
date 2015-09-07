<?php
class Estacionamiento{
	public static function Guardar($patente){
		$archivo=fopen('auto.txt',"a");
		$fecha= date('Y-m-d h:m:s');
		fwrite($archivo, $patente.">>".$fecha."\n");
		fclose($archivo);
	}
}
?>