<?php

include 'conexion.php';

class Docentes extends Conexion{


function getDocentes($pa){

	$sql = Conexion::conectar()->prepare("SELECT * FROM docentes limit $pa "); 
	$sql->execute();
	return $sql;

}

function getLapso(){

	$sql = Conexion::conectar()->prepare("SELECT * FROM proyectos"); 
	$sql->execute();
	return $sql;

}


public  function getDocentesId($idD){

	$sql = "SELECT docentes.id as idDocente, docentes.nombres as nombreDocente, docentes.apellidos as apellidoDocente, Seccion_nombre as seccion, Materia_nombre as materia, proyectos.nombre as nombreProyecto, proyectos.lapso_academico as lapsoAcademico, Aula_nombre as nombreAula, Dia_nombre as diaNombre, Hora_inicio as inicio,Hora_fin as fin

		FROM v_resumen
		INNER JOIN proyectos
		ON v_resumen.Proyecto_id = proyectos.id
		INNER JOIN docentes_seccions
		ON v_resumen.Seccion_id = docentes_seccions.seccion_id
		INNER JOIN docentes
		ON docentes_seccions.docente_id = docentes.id
		WHERE docentes.id = $idD ";

	$sql = Conexion::conectar()->prepare($sql);
	$sql->execute();
	return $sql;
		

}

public  function getDocentesId2($idD,$idP){

	$sql = "SELECT docentes.id as idDocente, docentes.nombres as nombreDocente, docentes.apellidos as apellidoDocente, Seccion_nombre as seccion, Materia_nombre as materia, proyectos.nombre as nombreProyecto, proyectos.lapso_academico as lapsoAcademico, Aula_nombre as nombreAula, Dia_nombre as diaNombre, Hora_inicio as inicio,Hora_fin as fin

		FROM v_resumen
		INNER JOIN proyectos
		ON v_resumen.Proyecto_id = proyectos.id
		INNER JOIN docentes_seccions
		ON v_resumen.Seccion_id = docentes_seccions.seccion_id
		INNER JOIN docentes
		ON docentes_seccions.docente_id = docentes.id
		WHERE docentes.id = $idD && proyectos.lapso_academico = '$idP' ";

	$sql = Conexion::conectar()->prepare($sql);
	$sql->execute();
	return $sql;
		

}


public function validarUser($dato1,$dato2){

	$sql = "SELECT * FROM DOCENTES where nombres = :nombre && cedula = :cedula " ;
	$sql = Conexion::conectar()->prepare($sql);
	$sql->execute(['nombre' => $dato1, 'cedula' => $dato2]);
	return $sql;


}

}


?>