<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include 'Modelos/modelo.php';

class apiGetDocentesId {

	function getDocentesId($id1){

		$docente = new  Docentes();
		$docentes = array();
		$error = array();
		
		$res = $docente->getDocentesId($id1);

		if ($res->rowCount()) {
			
			foreach ($res as $key ) {
				
				$item = array('idDocente'       => $key['idDocente'],
							  'nombre'   		=> $key['nombreDocente'],
							  'apellido' 		=> $key['apellidoDocente'],
							  'seccion'         => $key['seccion'],
							  'materia'         => $key['materia'],
							  'lapsoAcademico'  => $key['lapsoAcademico'],
							  'nombreAula'  	=> $key['nombreAula'],
							  'dia'             => $key['diaNombre'],
							  'inicio'       	=> $key['inicio'],
							  'fin'          	=> $key['fin']);

				array_push($docentes, $item);
			}

			echo json_encode($docentes);

		}else{

			$e = array('mensaje' => 'id no existe ');
			array_push($error, $e);
			echo json_encode($error);
		}

	}

	function getDocentesId2($id1,$id2){

		$docente = new  Docentes();
		$docentes = array();
		$error = array();
		
		$res = $docente->getDocentesId2($id1,$id2);

		if ($res->rowCount()) {
			
			foreach ($res as $key ) {
				
				$item = array('idDocente'       => $key['idDocente'],
							  'nombre'   		=> $key['nombreDocente'],
							  'apellido' 		=> $key['apellidoDocente'],
							  'seccion'         => $key['seccion'],
							  'materia'         => $key['materia'],
							  'lapsoAcademico'  => $key['lapsoAcademico'],
							  'nombreAula'  	=> $key['nombreAula'],
							  'dia'             => $key['diaNombre'],
							  'inicio'       	=> $key['inicio'],
							  'fin'          	=> $key['fin']);

				array_push($docentes, $item);
			}

			echo json_encode($docentes);

		}else{

			$e = array('mensaje' => 'no hay datos');
			array_push($error, $e);
			echo json_encode($error);
		}

	}

}




?>