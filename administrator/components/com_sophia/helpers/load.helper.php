<?php
//----------------------------------------------------------------------
// Sophia
// Sophia by Alex Olave - http://www.alfazeta.cl
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Author: 	Alex Olave - http://www.alfazeta.cl
// Copyright: copyright (C) 2012 - Alex olave.
// License: 	GNU/GPL, http://www.gnu.org/copyleft/gpl.html
// Pack: 	Sophia
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Sophia is free software. This version may have been modified pursuant
// to the GNU General Public License, and as distributed it includes or
// is derivative of works licensed under the GNU General Public License or
// other free or open source software licenses.
//----------------------------------------------------------------------


defined( '_JEXEC' ) or die( 'Restricted access' );

class nomHelperLoad
{
	function getAlumno($id) {
		$alumno = &JTable::getInstance('alumno', 'Table');
		$alumno->load($id);
		return $alumno;
	}

	function getlist($table = 'estudiantes') {
		$db = &JFactory::getDBO();
		$query = "SELECT * FROM #__sophia_".$table;
		$db->setQuery($query);
		return $db->loadObjectList();
	}

	function getlist_Sexo($sexo) {
		$items[]		= JHTML::_('select.option',  'Masculino', JText::_( 'masculino' ), 'id', 'title' );
		$items[]		= JHTML::_('select.option',  'Femenino', JText::_( 'Femenino' ), 'id', 'title' );
		$javascript = '';
		$list		= JHTML::_('select.genericlist',   $items, 'sexo', 'class="inputbox" size="1"'.$javascript,'id', 'title', $sexo );
		return $list;
	}

	function getlist_Per($periodo) {
		$items[]		= JHTML::_('select.option',  '1', 1, 'id', 'title' );
		$items[]		= JHTML::_('select.option',  '2', 2, 'id', 'title' );
		$javascript = '';
		$list		= JHTML::_('select.genericlist',   $items, 'periodo', 'class="inputbox" size="1"'.$javascript,'id', 'title', $periodo );
		return $list;
	}

	function getlist_User($user_id, $gid = null) {
		$db = &JFactory::getDBO();
		$where = '';
		if ($gid != null) $where = " WHERE gid = ".$gid." AND block = 0";
		$query = "SELECT * FROM #__users".$where;
		$db->setQuery($query);
		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'No user' ).' -', 'id', 'username' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, 'user_id', 'class="inputbox" size="1"', 'id', 'username', $user_id);
		return $list;
	}

	function getlist_Comuna($comuna_id,$name = 'comuna_id') {
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id as id , comuna as title');
		$query->from('#__sophia_comuna');
		$query->where('published = 1');
		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Comuna' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $comuna_id);
		return $list;
	}

	function getlist_Region($region_id,$name = 'region_id') {
		$db = &JFactory::getDBO();

		$query = $db->getQuery(true);
		$query->select('id as id , region as title');
		$query->from('#__sophia_region');
		$query->where('published = 1');
		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Region' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $region_id);
		return $list;
	}
	function getlist_Ciudad($ciudad_id,$name = 'ciudad_id') {
		$db = &JFactory::getDBO();


		$query = $db->getQuery(true);
		$query->select('id as id , ciudad as title');
		$query->from('#__sophia_ciudad');
		$query->where('published = 1');
		$javascript = " onchange=\"getModelList(this)\" ";
		$db->setQuery((string)$query);
		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Ciudad' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();


		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1" '.$javascript , 'id', 'title', $ciudad_id);
		return $list;
	}
	function getlist_Curso($curso_id,$name = 'curso_id') {
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id as id , curso as title');
		$query->from('#__sophia_curso');
		$query->where('published = 1');
		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin curso' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $curso_id);
		return $list;
	}

	function getlist_Profesor($profesor_id,$name = 'profesor_id') {
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id as id , nombre as title');
		$query->from('#__sophia_profesores');
		$query->where('published = 1');
		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin profesor' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $profesor_id);
		return $list;
	}
	function getlist_Asignatura($asignatura_id,$name = 'asignatura_id') {
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id as id , asignatura as title');
		$query->from('#__sophia_asignaturas');
		$query->where('published = 1');
		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Asignatura' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $asignatura_id);
		return $list;
	}

	function getlist_Periodo($periodo_id,$name = 'periodo_id') {
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id as id , nombre as title');
		$query->from('#__sophia_periodo');
		$query->where('published = 1');
		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Periodo' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $periodo_id);
		return $list;
	}
	function getlist_Materia($materia_id,$name = 'materia_id') {
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select("mat.id as id , CONCAT(asig.asignatura,'\n -  ',cur.curso,'\n -  ',prof.nombre) as title");
		$query->from('#__sophia_materias As mat, #__sophia_asignaturas As asig,#__sophia_profesores As prof,#__sophia_curso As cur');
		$query->where('mat.published = 1');
		$query->where('mat.asignatura_id = asig.id');
		$query->where('mat.profesor_id = prof.id');
		$query->where('mat.curso_id = cur.id');

		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Materia' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $materia_id);
		return $list;
	}
	
		function getlist_MateriaProfe($materia_id,$name = 'materia_id') {
		
		$user	 =& JFactory::getUser();
		
		$db = &JFactory::getDBO();
		
		$query = $db->getQuery(true);
		$query->select("mat.id as id , CONCAT(asig.asignatura,'\n -  ',cur.curso,'\n -  ',prof.nombre) as title");
		$query->from('#__sophia_materias As mat, #__sophia_asignaturas As asig,#__sophia_profesores As prof,#__sophia_curso As cur');
		$query->where('mat.published = 1');
		$query->where('mat.asignatura_id = asig.id');
		$query->where('mat.profesor_id = prof.id');
		$query->where('mat.curso_id = cur.id');
		$query->where('prof.user_id = '.$user->id );
		

		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Materia' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $materia_id);
		return $list;
	}

	function getlist_Alumno($alumno_id,$name = 'alumno_id') {
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id as id , nombre as title');
		$query->from('#__sophia_estudiantes');
		$query->where('published = 1');
		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Alumno' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $alumno_id);
		return $list;
	}
	function getlist_AlumnoMatricula($matricula_id,$name = 'matricula_id') {
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select("mat.id as id ,CONCAT(cur.curso,' - ', es.nombre) as title");
		$query->from('#__sophia_estudiantes es');
		$query->from('#__sophia_matricula mat');
		$query->from('#__sophia_curso As cur');
		
		$query->where('mat.alumno_id = es.id');
		$query->where('mat.curso_id = cur.id');
		$query->where('es.published = 1');
		$query->where('mat.published = 1');
		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Alumno' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $matricula_id);
		return $list;
	}
	function getlist_Anno($anno_id,$name = 'anno_id') {
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id as id , anno as title');
		$query->from('#__sophia_anno ');
		$query->where('published = 1');
		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Anno' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $anno_id);
		return $list;
	}
	function getlist_Evaluacion($evaluacion_id,$name = 'evaluacion_id') {
		$user	 =& JFactory::getUser();
		
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select("eva.id as id , CONCAT(cur.curso,' - ', asig.asignatura,' - ',eva.titulo) as title");
		$query->from('#__sophia_evaluacion As eva,#__sophia_materias As mat, #__sophia_asignaturas As asig,#__sophia_profesores As prof,#__sophia_curso As cur');
		$query->where('mat.published = 1');
		$query->where('mat.asignatura_id = asig.id');
		$query->where('mat.profesor_id = prof.id');
		$query->where('mat.curso_id = cur.id');
		$query->where('eva.materia_id = mat.id');
		//$query->where('prof.user_id = '.$user->id );
		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Evaluacion' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title', $evaluacion_id);
		return $list;
	}
	function getlist_Tipo($tipo) {
		$items[]		= JHTML::_('select.option',  'Atraso', JText::_( 'Atraso' ), 'id', 'title' );
		$items[]		= JHTML::_('select.option',  'Inasistencia', JText::_( 'Inasistencia' ), 'id', 'title' );
		$javascript = '';
		$list		= JHTML::_('select.genericlist',   $items, 'tipo', 'class="inputbox" size="1"'.$javascript,'id', 'title', $tipo );
		return $list;
	}
	function getlist_EvaluacionProf($evaluacion_id,$name = 'evaluacion_id') {
		$db = &JFactory::getDBO();
		$user	 =& JFactory::getUser();
		$query = $db->getQuery(true);
		$query->select("eva.id as id , CONCAT(cur.curso,' - ', asig.asignatura,' - ',prof.nombre,' - ',eva.titulo) as title");
		$query->from('#__sophia_evaluacion As eva,#__sophia_materias As mat, #__sophia_asignaturas As asig,#__sophia_profesores As prof,#__sophia_curso As cur');
		$query->where('mat.published = 1');
		$query->where('mat.asignatura_id = asig.id');
		$query->where('mat.profesor_id = prof.id');
		$query->where('mat.curso_id = cur.id');
		$query->where('eva.materia_id = mat.id');
		$query->where('prof.user_id = '.$user->id );
		$query->where('eva.published = 1' );
		
		//echo $query;
		$db->setQuery($query);

		$rowsi[] = JHTML::_('select.option',  '0', '- '.JText::_( 'Sin Evaluacion' ).' -', 'id', 'title' );
		$rowsm = $db->loadObjectList();
		$rows = array_merge($rowsi, $rowsm);
		$list = JHTML::_('select.genericlist', $rows, $name, 'class="inputbox" size="1"', 'id', 'title',$evaluacion_id);
		return $list;
	}

	function getlist_EvaluacionProfCurso($evaluacion_id) {
		$db = &JFactory::getDBO();
		$user	 =& JFactory::getUser();
		$query = $db->getQuery(true);
		$query->select("eva.titulo");
		$query->from('#__sophia_evaluacion As eva');
		$query->where('eva.id = '.$evaluacion_id);
		//echo $query;
		$db->setQuery($query);
		$row = $db->loadResult();
			
		return $row;
		 
	}

	function getAlumnosxCurso($curso_id) {
		$db = &JFactory::getDBO();
		$user	 =& JFactory::getUser();
		$query = $db->getQuery(true);
		$query->select("count(*)");
		$query->from('#__sophia_matricula as matr');
		$query->where('mat.curso_id = '.$curso_id);
		//echo $query;
		$db->setQuery($query);
			
		$alumnoxcurso = $db->loadResult();
			
		return $alumnoxcurso;
		 
	}

	function getPromedioCurso($curso_id,$materia_id,$periodo_id) {
		$db = &JFactory::getDBO();
		$user	 =& JFactory::getUser();
		$query = $db->getQuery(true);
		$query->select("sum(nota.nota* eva.coeficiente)/sum(eva.coeficiente) as nota");
		$query->from('#__sophia_notas AS nota');
		$query->from('#__sophia_estudiantes AS est');
		$query->from('#__sophia_evaluacion AS eva');
		$query->from('#__sophia_materias AS mat');
		$query->from('#__sophia_curso AS cur');
		$query->from('#__sophia_profesores AS prof');
		$query->from('#__sophia_asignaturas AS asig');
		$query->from('#__sophia_periodo AS per ');
		$query->from('#__sophia_matricula as matr');
		$query->where('nota.evaluacion_id = eva.id ');
		$query->where('nota.matricula_id = matr.id ');
		$query->where('eva.materia_id = mat.id ');
		$query->where('eva.periodo_id = per.id ');
		$query->where('mat.profesor_id = prof.id ');
		$query->where('mat.curso_id = cur.id ');
		$query->where('mat.asignatura_id = asig.id');
		$query->where('matr.alumno_id = est.id');
		$query->where('eva.materia_id = '.$materia_id);
		$query->where('matr.curso_id = '.$curso_id);
		$query->where('eva.periodo_id = '.$periodo_id);
		 
		echo $query;
		$db->setQuery($query);
			
		$sumanotas = $db->loadResult();
			
		$PC = $sumanotas /$this->getAlumnosxCurso($curso_id);
	}
	function getAlumnoInfome($curso_id) {

		 
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('est.*,mat.nromatricula as matricula,cur.curso as curso,mat.id as matricula_id');
		$query->from( '#__sophia_matricula AS mat');
		$query->from( '#__sophia_estudiantes AS est');
		$query->from( '#__sophia_curso AS cur');
		$query->where('mat.alumno_id = est.id');
		$query->where('mat.curso_id = cur.id');
		$query->where('mat.curso_id = '.$curso_id);

		$db->setQuery($query);
		$alumno = $db->loadObjectList();


		return $alumno;
	}

	//17/05/2012
	function getCurso($evaluacion_id)
	{


		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
	  
		$query = "SELECT cur.id as curso_id,mat.id As matricula_id,eva.id As evaluacion_id"
		." FROM"
		."  #__sophia_evaluacion AS eva"
		.", #__sophia_materias AS mat"
		.", #__sophia_curso AS cur"
		." WHERE "
		."   mat.id = eva.materia_id"
		." AND  cur.id = mat.curso_id"
		." AND  eva.id = ".$evaluacion_id;
		 
		echo $query;

		$db->setQuery($query);
		$row = $db->loadObjectList();
		return $row;
	}

	function getAlumnocurso($evaluacion_id=0) {
		 
		if($evaluacion_id<0 ){
			$evaluacion_id =0;
		}
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query = "SELECT es.nombre,matr.id As matricula_id"
		." ,matr.nromatricula AS matricula"
		." ,eva.id As evaluacion_id, cur.id As curso_id"
		." FROM"
		."  #__sophia_matricula AS matr"
		.", #__sophia_estudiantes AS es"
		.", #__sophia_evaluacion AS eva"
		.", #__sophia_materias AS mat"
		.", #__sophia_curso AS cur"
		." WHERE "
		."   matr.alumno_id = es.id"
		."  AND  mat.id = eva.materia_id"
		." AND  cur.id = mat.curso_id"
		." AND  mat.curso_id = matr.curso_id"
		." AND matr.alumno_id not in (select matricula_id from #__sophia_notas where evaluacion_id = eva.id)" 
		." AND  eva.id = ".$evaluacion_id;
		
		// echo $query;

		$db->setQuery($query);
		$row = $db->loadObjectList();
		return $row;
	}

	public function getNotas($materia_id,$periodo_id,$matricula_id) {

		if($matricula_id<0 ){
			$matricula_id =0;
		}
		$db = &JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('nota.id ,nota.nota as nota,eva.titulo as titulo,eva.coeficiente As coeficiente');
		$query->select('cur.curso AS curso , prof.nombre AS profesor,asig.asignatura as asignatura,per.nombre as periodo');
		$query->from( '#__sophia_notas AS nota');
		$query->from( '#__sophia_estudiantes AS est');
		$query->from( '#__sophia_evaluacion AS eva');
		$query->from( '#__sophia_materias AS mat');
		$query->from( '#__sophia_curso AS cur');
		$query->from( '#__sophia_profesores AS prof');
		$query->from( '#__sophia_asignaturas AS asig');
		$query->from( '#__sophia_periodo AS per ');
		$query->from( '#__sophia_matricula AS matr ');

		$query->where('nota.evaluacion_id = eva.id');
		$query->where('nota.matricula_id = matr.id');
		$query->where('eva.materia_id = mat.id');
		$query->where('eva.periodo_id = per.id');
		$query->where('per.published =1');
		$query->where('mat.profesor_id = prof.id');
		$query->where('mat.curso_id = cur.id');
		$query->where('mat.asignatura_id = asig.id');
		$query->where('matr.alumno_id = est.id');
		$query->where('matr.id= '. $matricula_id);
		$query->where('eva.materia_id= '. $materia_id);
		$query->where('per.periodo= '. $periodo_id);
			
		//echo $query;
		$db->setQuery($query);
		$row = $db->loadObjectList();
		 
		return $row;
	}
}// end Clase