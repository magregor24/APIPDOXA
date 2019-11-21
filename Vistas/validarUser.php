<?php

include 'Json/apiGetDocentes.php';

$docentes = new apiDocentes();


if (isset($_GET['url'])) {

	$ro = explode('/' , filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL ));
	$docentes->validarUser($ro[1] ,$ro[2]);
				
}else{

	echo json_encode(array('mensaje' => 'Parametros "Nombre" y "Cedula" no definidos'));
	echo "@Example:copia y pega en la url ==>> /aholimar/17062851";
	
	
}




?>