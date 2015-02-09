
<?php
defined('_JEXEC') or die("Invalid access");
//jimport('joomla.application.component.model');
jimport('joomla.application.component.modelitem');

//class SophiaModelInfo extends JModel
class SophiaModelInfopdf extends JModelItem
{


	var $_data;

	function _buildQuery()
	{
		$user	 =& JFactory::getUser();

		$this->_query = ' SELECT * FROM #__sophia_estudiantes AS al WHERE user_id = '. $user->id;
		return $this->_query;
		return $this->$query;
	}



	function __construct()
	{
		parent::__construct();
	}

	function getData()
	{
		if (empty($this->_data)) {
			$query = $this->_buildQuery();
			$this->_data = $this->_getList($query);
		}
		return $this->_data;

	}

	function getList()
	{
		return 0;
	}

	public function getAlumno() {

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
			$query->where('est.user_id = '. $user->id);


			$this->_db->setQuery($query);
			$this->alumno = $this->_db->loadObjectList();
		}

		return $this->alumno;
	}
	public function getAnotaciones() {

		if (empty($this->anotaciones)) {

			$user	 =& JFactory::getUser();
			$db = $this->getDbo();
			$query = $db->getQuery(true);
				
			$query->select('anot.*,CONCAT(per.nombre," ",anno.anno) as periodo');
			$query->from( '#__sophia_matricula AS mat');
			$query->from( '#__sophia_estudiantes AS est');
			$query->from( '#__sophia_anotaciones AS anot');
			$query->from( '#__sophia_periodo AS per');
			$query->from( '#__sophia_anno AS anno');
			$query->where('mat.alumno_id = est.id');
			$query->where('anot.matricula_id = mat.id');
			$query->where('anot.periodo_id = per.id');
			$query->where('mat.published = 1');
			$query->where('per.published = 1');
			$query->where('per.anno_id = anno.id');
				
			$query->where('est.user_id = '. $user->id);
			//echo $query;
			$this->_db->setQuery($query);
			$this->anotaciones = $this->_db->loadObjectList();
		}

		return $this->anotaciones;
	}

	public function getAsignaturas() {
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
			$query->where('est.user_id = '. $user->id);
				
			//echo $query;
			$this->_db->setQuery($query);
			$this->asignaturas = $this->_db->loadObjectList();
		}

		return $this->asignaturas;
	}

	public function getNotas() {
		$where = array();
		if (empty($this->notas)) {
				
			$user	 =& JFactory::getUser();
			$db = $this->getDbo();

				
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
			$query->where('mat.profesor_id = prof.id');
			$query->where('mat.curso_id = cur.id');
			$query->where('mat.asignatura_id = asig.id');
			$query->where('matr.alumno_id = est.id');

			$query->where('est.user_id = '. $user->id);

			echo $query;
			$this->_db->setQuery($query);
			$this->notas = $this->_db->loadObjectList();
		}

		return $this->notas;
	}

	public function getAranceles() {

		if (empty($this->aranceles)) {

			$user	 =& JFactory::getUser();
			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('det.*,det.estado as estado,per.anno As anno');
			$query->from( '#__sophia_matricula AS mat');
			$query->from( '#__sophia_estudiantes AS est');
			$query->from( '#__sophia_anno AS per');
			$query->from( '#__sophia_aranceles AS ar');
			$query->from( '#__sophia_ara_detalles AS det');
			$query->where('mat.alumno_id = est.id');
			$query->where('ar.matricula_id = mat.id');
			$query->where('ar.anno_id = per.id');
			$query->where('ar.published = 1');
			$query->where('mat.published = 1');
			$query->where('per.published = 1');
			$query->where('est.user_id = '. $user->id);
			$query->where('det.arancel_id = ar.id');
				
			//echo $query;
			$this->_db->setQuery($query);
			$this->aranceles = $this->_db->loadObjectList();
		}

		return $this->aranceles;
	}
	public function getInasistencias() {

		if (empty($this->inasistencias)) {

			$user	 =& JFactory::getUser();
			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('ina.*,per.nombre As periodo');
			$query->from( '#__sophia_matricula AS mat');
			$query->from( '#__sophia_estudiantes AS est');
			$query->from( '#__sophia_periodo AS per');
			$query->from( '#__sophia_inasistencias AS ina');
			$query->where('mat.alumno_id = est.id');
			$query->where('ina.matricula_id = mat.id');
			$query->where('ina.periodo_id = per.id');
			$query->where('mat.published = 1');
			$query->where('per.published = 1');
			$query->where('ina.published = 1');
			$query->where('est.user_id = '. $user->id);
			$query->order('ina.fecha ASC');
				
			//echo $query;
			$this->_db->setQuery($query);
			$this->inasistencias = $this->_db->loadObjectList();
		}

		return $this->inasistencias;
	}


	/**
	 * Method to get a list of items.
	 *
	 * @return	mixed	An array of objects on success, false on failure.
	 */
	public function getItems()
	{
		// Invoke the parent getItems method to get the main list
		$items = parent::getItems();

		// Convert the params field into an object, saving original in _params
		for ($i = 0, $n = count($items); $i < $n; $i++) {
			$item = &$items[$i];
			if (!isset($this->_params)) {
				$params = new JRegistry();
				$params->loadString($item->params);
				$item->params = $params;
			}
		}

		return $items;
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