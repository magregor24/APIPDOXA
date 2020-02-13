<?php


include 'Json/apiGetDocentes.php';

$docentes = new apiDocentes();

if (isset($_GET['url'])) {
	
	$ro = explode('/' , filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL ));

	if (!isset($ro[1]) /*|| gettype($ro[1]) == 'string' */) {

		echo json_encode(array('mensaje' => 'Parametro {cantidad:} no definido'));

	}else{

		$docentes->getDocentes($ro[1]);	
	}	
}


?>
