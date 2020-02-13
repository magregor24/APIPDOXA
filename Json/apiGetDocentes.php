<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include 'Modelos/modelo.php';


class apiDocentes{

	function getUsers(){

		$docente = new  Docentes();
		$res = $docente->getUsers();
		$users = array();
		$error = array();

		if ($res->rowCount()) {
			
			foreach ($res as $key ) {
				
				$item = array('id' 		  => $key['id'],
							  'user'  	  => $key['username'],
							  'password'  => $key['password'],
							  'role'  	  => $key['role']);

				array_push($users, $item);
			}

			echo json_encode($users);

		}else{

			$e = array('mensaje' => 'usuario no existe');
			array_push($error, $e);
			echo json_encode($error);
		}



	}


	function getDocentes($pa){

		$docente = new  Docentes();
		$res = $docente->getDocentes($pa);
		$docentes = array();
		$error = array();


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

			$e = array('mensaje' => 'usuario no existe');
			array_push($error, $e);
			print json_encode($error);
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

			$e = array('mensaje' => 'lapso_academico no existe');
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

			$e = array('mensaje' => 'usuario no existe en la base de datos');
			array_push($error, $e);
			echo json_encode($error);
		}


	}

	function validarUserAdmin($dato1,$dato2){

		$docente = new  Docentes();
		$res = $docente->validarUserAdmin($dato1,$dato2);
		
		$user = array();
		$error = array();

		if ($res->rowCount()) {
			
			foreach ($res as $key ) {
				
				$item = array('valid'  =>    'true',
					   		  'id' 	   =>    $key['id'],
					   		  'user'   =>    $key['username'],
					   		  'pass'   =>    $key['password'],
					   		  'role'   =>    $key['role'] );

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
