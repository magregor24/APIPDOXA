<?php

//header('Access-Control-Allow-Origin: *');
//header('Content-Type: application/json');

$rutas = ['docentes','docenteId','validarUser','periodos','users','ValidarUserAdmin','prueba3'];

if(isset($_GET['url'])){
	
	$ro = explode('/' , filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL ));

	if ($ro[0] === $rutas[0] || $ro[0] === $rutas[1] || $ro[0] === $rutas[2] || 
		$ro[0] === $rutas[3] || $ro[0] === $rutas[4] || $ro[0] === $rutas[5] ||
	    $ro[0] === $rutas[6]) {

		require 'Vistas/'.$ro[0].'.php';

	}else{
		
		echo json_encode(array('mensaje' => 'Ruta Invalida'));
	}
	
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
		  	<li class="breadcrumb-item active" aria-current="page">Obetener docentes por {id} </li>
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
		  	<li class="breadcrumb-item active" aria-current="page">Validar Usuarios recibe dos parametros:  validarUser/{nombre}/{cedula}</li>
		    <li class="breadcrumb-item"><a href="validarUser">validarUser</a></li>   
		  </ol>
		</nav>

		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb"> 
		  	<li class="breadcrumb-item active" aria-current="page">Para Obtener todos los Usuarios</li>
		    <li class="breadcrumb-item"><a href="users">Users</a></li>   
		  </ol>
		</nav>

		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb"> 
		  	<li class="breadcrumb-item active" aria-current="page">Para validar usuario administrador</li>
		    <li class="breadcrumb-item"><a href="ValidarUserAdmin">ValidarUserAdmin</a></li>   
		  </ol>
		</nav>

		

	</div>
</div>

<script>
	

fetch("http://localhost/APIPDOXA/cal")
.then(js => js.json())
.then(ele => {
	console.log(ele);
})

</script>



</body>
</html>


<?php

}

?>


