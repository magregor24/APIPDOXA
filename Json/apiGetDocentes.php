<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include 'Modelos/modelo.php';


class apiDocentes{


	function getDocentes($pa){

		$docente = new  Docentes();
		$res = $docente->getDocentes($pa);
		$docentes = array();

		if ($res->rowCount()) {
			
			while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
				
				$iten = array('id'        => $row['id'],
							  'cedula'    => $row['cedula'],
							  'nombre'    => $row['nombres'],
							  'apellido'  => $row['apellidos']

				);

				array_push($docentes , $iten);
			}
			
			echo json_encode($docentes);

		}else{

			echo json_encode(array('mensaje'  => 'no hay elementos registrados'));
		}

	}


	function getLapso(){

		$docente = new  Docentes();
		$res = $docente->getLapso();
		$periodo = array();
		$error = array();

		if ($res->rowCount()) {
			
			foreach ($res as $key ) {
				
				$item = array('id' 				=> $key['id'],
							  'periodo'  		=> $key['nombre'],
							  'lapsoAcademico'  => $key['lapso_academico'],
							  'fecha'  			=> $key['fecha']);

				array_push($periodo, $item);
			}

			echo json_encode($periodo);

		}else{

			$e = array('mensaje' => 'error');
			array_push($error, $e);
			echo json_encode($error);
		}



	}


	function validarUser($dato1,$dato2){

		$docente = new  Docentes();
		$res = $docente->validarUser($dato1,$dato2);
		
		$user = array();
		$error = array();

		if ($res->rowCount()) {
			
			foreach ($res as $key ) {
				
				$item = array('valid'    =>    'true',
					   		   'id' 	  =>    $key['id'],
					   		   'nombre'   =>    $key['nombres'],
					   		   'apellido' =>    $key['apellidos'],
					   		   'cedula'   =>    $key['cedula'] );

				array_push($user, $item);
			}

			echo json_encode($user);


		}else{

			$e = array('mensaje' => 'usuario no existe');
			array_push($error, $e);
			echo json_encode($error);
		}


	}



}
