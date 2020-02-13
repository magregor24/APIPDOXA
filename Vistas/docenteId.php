<?php

include 'Json/apiGetDocentesId.php';

$docentes = new apiGetDocentesId();


if (isset($_GET['url'])) {

	$ro = explode('/' , filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL ));

	if (!isset($ro[1])) {
		
		echo json_encode(array('mensaje' => 'Parametro {id} no definido'));

	}else{
		$docentes->getDocentesId($ro[1]);
	}
}


?>
