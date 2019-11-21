<?php

//header('Access-Control-Allow-Origin: *');
//header('Content-Type: application/json');

if(isset($_GET['url'])){
	
	$ro = explode('/' , filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL ));
	require 'Vistas/'.$ro[0].'.php';


}else {

?>


<html>
<head>
	<title>Pdoxa Api</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container">

	<div class="jumbotron">
		  <h1 class="display-4">PDOXA APIREST</h1>
		  <p class="lead">Con esta Api podrás obtener y ver los horarios de los profesores de la Universidad Experimental"Romulo Gallegos" del Area de Ingenieria en Sistemas (AIS)</p>
		  <hr class="my-4">
		  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
		  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</div>

	<div class="container">

		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb"> 
		  	<li class="breadcrumb-item active" aria-current="page">Obetener todos los docentes</li>
		    <li class="breadcrumb-item"><a href="docentes">docentes</a></li>   
		  </ol>
		</nav>

		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb"> 
		  	<li class="breadcrumb-item active" aria-current="page">Obetener docentes por ID @Example id=111</li>
		    <li class="breadcrumb-item"><a href="docenteId">docentesId</a></li>   
		  </ol>
		</nav>

		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb"> 
		  	<li class="breadcrumb-item active" aria-current="page">Obtener Periodo/Lapso Academico/ Fecha...</li>
		    <li class="breadcrumb-item"><a href="periodos">periodos</a></li>   
		  </ol>
		</nav>

		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb"> 
		  	<li class="breadcrumb-item active" aria-current="page">Para validar Usuarios @Example nombre='aholimar' y cedula='17062851'</li>
		    <li class="breadcrumb-item"><a href="validarUser">validarUser</a></li>   
		  </ol>
		</nav>

		

	</div>


</div>
</body>
</html>


<?php

}

?>


