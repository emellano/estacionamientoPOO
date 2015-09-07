<?php
class Estacionamiento{
	public static function Guardar($patente){
		$archivo=fopen('auto.txt',"a");
		$fecha= date('Y-m-d h:m:s');
		fwrite($archivo, $patente.">>".$fecha."\n");
		fclose($archivo);
	}

	public static function Leer(){
		$listadeautos=array();
		$archivo=fopen('auto.txt',"r");
		while(!feof($archivo)){
			$renglon=fgets($archivo);
			$auto = explode(">>", $renglon);
			$listadeautos[]=$auto;
		}
		fclose($archivo);
		return $listadeautos;
	}
}
?>