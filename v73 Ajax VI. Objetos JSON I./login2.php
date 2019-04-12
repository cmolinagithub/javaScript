<?php


$el_usuario=isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];

$el_array = new stdClass();

if ($el_usuario=="Juan") {
  
	$el_array->Nombre = "Juan";
	$el_array->Apellido = "Gómez";
	$el_array->Edad = "18";
	$json = json_encode($el_array);
	echo $json;


}else if($el_usuario=="Carlos") {
  
		$el_array->Nombre = "Carlos";
		$el_array->Apellido = "Molina";
		$el_array->Edad = "34";
		$json = json_encode($el_array);
		echo $json;
	
	
}else if($el_usuario=="Diana") {
  
	$el_array->Nombre = "Diana";
	$el_array->Apellido = "Cruz";
	$el_array->Edad = "30";
	$json = json_encode($el_array);
	echo $json;

}




?>