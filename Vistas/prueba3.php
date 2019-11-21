<?php


include 'Json/apiGetDocentesId.php';

$docentes = new apiGetDocentesId();

if (isset($_GET['url'])) {

	$ro = explode('/' , filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL ));
	$docentes->getDocentesId2($ro[1] ,$ro[2]);
	
	
}else{

	echo json_encode(array('mensaje' => 'Parametros (id) y (lapsoAcademico) no definidos'));

}




?>
