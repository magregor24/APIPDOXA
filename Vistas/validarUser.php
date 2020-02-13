<?php

include 'Json/apiGetDocentes.php';

$docentes = new apiDocentes();


if (isset($_GET['url'])) {

	$ro = explode('/' , filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL ));

	if (!isset($ro[1]) || !isset($ro[2])) {
		echo json_encode(array('mensaje' => 'Parametros no definidos'));
		echo "\n";
		echo "\n";
		echo "Ejemplo: http://localhost/APIPDOXA/validarUser/aholimar/17062851";

	}else{

		$docentes->validarUser($ro[1] ,$ro[2]);
	}
	
				
}




?>