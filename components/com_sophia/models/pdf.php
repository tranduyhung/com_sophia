
<?php
defined('_JEXEC') or die("Invalid access");
//jimport('joomla.application.component.model');
jimport('joomla.application.component.modelitem');

//class SophiaModelInfo extends JModel
class SophiaModelpdf extends JModel
{


	public function getTable($type = 'matricula', $prefix = 'SophiaTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}


	function __construct()
	{
		parent::__construct();
	}



	function getData()
	{
		$id = JRequest::getVar('cid');
		$row =& $this->getTable('matricula');
		//$row =& $this->getTable('curso');

		$row->load($id[0]);
		return $row;
	}



	public function getAlumno($matricula_id){

		if (empty($this->alumno)) {

			$user	 =& JFactory::getUser();
			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('est.*,mat.nromatricula as matricula,cur.curso as curso');
			$query->select('prf.nombre AS profesorjefe');
			$query->from( '#__sophia_matricula AS mat');
			$query->from( '#__sophia_estudiantes AS est');
			$query->from( '#__sophia_curso AS cur');
			$query->from( '#__sophia_curso_prof AS cpr');
			$query->from( '#__sophia_profesores AS prf');
			$query->where('mat.alumno_id = est.id');
			$query->where('mat.curso_id = cur.id');
			$query->where('mat.curso_id = cpr.curso_id');
			$query->where('cpr.profesor_id=prf.id');
			$query->where('mat.id = '. $matricula_id);


			$this->_db->setQuery($query);
			$this->alumno = $this->_db->loadObjectList();
		}

		return $this->alumno;
	}

	public function getAsignaturas($matricula_id){
		$where = array();
		if (empty($this->asignaturas)) {
				
			$user	 =& JFactory::getUser();
				
			$db = $this->getDbo();

				
			$query = $db->getQuery(true);
			$query->select('cur.curso AS curso, prof.nombre AS profesor,asig.asignatura as asignatura');
			$query->select('mat.id AS materia_id ');
			$query->select('cur.id as curso_id	,asig.id AS asignatura_id');
			$query->select('matr.id as matricula_id');
			$query->from( '#__sophia_estudiantes AS est');
			$query->from( '#__sophia_materias AS mat');
			$query->from( '#__sophia_curso AS cur');
			$query->from( '#__sophia_profesores AS prof');
			$query->from( '#__sophia_asignaturas AS asig');
			$query->from( '#__sophia_matricula AS matr ');
			$query->where('matr.alumno_id = est.id');
			$query->where('mat.profesor_id = prof.id');
			$query->where('mat.curso_id = cur.id');
			$query->where('mat.asignatura_id = asig.id');
			$query->where('matr.id = '. $matricula_id);
			//echo $query;
			$this->_db->setQuery($query);
			$this->asignaturas = $this->_db->loadObjectList();
		}

		return $this->asignaturas;
	}
	 


	// datos del colegio
	public function getColegio() {

		if (empty($this->colegio)) {

			$user	 =& JFactory::getUser();
			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('col.*');
			$query->from( '#__sophia_colegio AS col');
			$query->where('col.published = 1');
				
			//echo $query;
			$this->_db->setQuery($query);
			$this->colegio = $this->_db->loadObjectList();
		}

		return $this->colegio;
	}
}
?>