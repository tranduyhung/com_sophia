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
// File: 	alumno.php
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Sophia is free software. This version may have been modified pursuant
// to the GNU General Public License, and as distributed it includes or
// is derivative of works licensed under the GNU General Public License or
// other free or open source software licenses.
//----------------------------------------------------------------------


defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );

class SophiaModelNotas extends JModel
{
	var $_data;

	function _buildQuery()
	{
		$user	 =& JFactory::getUser();
		
		$where = array();
		if ($this->filter_state == 'P') {
			$where[] = 'nota.published = 1';
		}
		elseif ($this->filter_state == 'U') {
			$where[] = 'nota.published = 0';
		}
		/*	if ($this->filter_curso != '') {
			$where[] = 'cur.id LIKE \''.$this->filter_curso. '\'';
			}
			*/

		if ($this->search)
		{
			$where[] = 'LOWER(cur.curso) LIKE \'%'. $this->search. '%\'';
		}

		$where[] = ' nota.evaluacion_id = eva.id';
		$where[] = ' nota.matricula_id = matr.id';
		$where[] = ' matr.alumno_id = est.id';
		$where[] = ' eva.materia_id = mat.id';
		$where[] = ' eva.periodo_id = per.id';
		$where[] = ' mat.profesor_id = prof.id';
		$where[] = ' mat.curso_id = cur.id';
		$where[] = ' mat.asignatura_id = asig.id';
		$where[] = ' prof.user_id= '.$user->id;


		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		$orderby = '';
		if (($this->filter_order != 'cur.curso') && ($this->filter_order != 'prof.nombre')&& ($this->filter_order != 'asig.asignatura') && ($this->filter_order != 'published') && ($this->filter_order != 'id')) $this->filter_order = '';
		if (($this->filter_order) && ($this->filter_order_Dir))
		$orderby 	= ' ORDER BY '. $this->filter_order .' '. $this->filter_order_Dir;

		$this->_query = ' SELECT nota.*,eva.titulo as titulo,cur.curso AS curso , prof.nombre AS profesor,asig.asignatura as asignatura,per.nombre as periodo'
		. ' FROM #__sophia_notas AS nota'
		. ',#__sophia_estudiantes AS est'
		. ',#__sophia_evaluacion AS eva'
		. ',#__sophia_materias AS mat'
		. ',#__sophia_matricula AS matr'
		. ',#__sophia_curso AS cur'
		. ',#__sophia_profesores AS prof'
		. ',#__sophia_asignaturas AS asig'
		. ',#__sophia_periodo AS per '
		. $where
		. $orderby
		;
			
		return $this->_query;
			
	}


	var $_total = null;
	var $_pagination = null;

	function __construct()
	{
		parent::__construct();
		$mainframe = JFactory::getApplication();

		$this->filter_order	= $mainframe->getUserStateFromRequest( "filter_order", 'filter_order', '', 'word' );
		$this->filter_order_Dir	= $mainframe->getUserStateFromRequest( "filter_order_Dir", 'filter_order_Dir', '', 'word' );
		$this->filter_state	= $mainframe->getUserStateFromRequest( "filter_state",	'filter_state',	'', 'word' );
		//$this->filter_curso	= $mainframe->getUserStateFromRequest( "filter_curso",	'filter_curso',	'', 'word' );

		$this->search		= $mainframe->getUserStateFromRequest( "search", 'search', '', 'string' );
		$this->search		= JString::strtolower( $this->search );

		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart	= $mainframe->getUserStateFromRequest( 'limitstart', 'limitstart', 0, 'int' );
		$limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);
		$this->setState('limit', $limit);
		$this->setState('limitstart', $limitstart);
	}

	function getData()
	{
		if (empty($this->_data)) {
			$query = $this->_buildQuery();
			//echo $query;
			$this->_data = $this->_getList($query, $this->getState('limitstart'), $this->getState('limit'));
		}
		return $this->_data;
	}

	function getList()
	{


		//$lists['curso'] = JHTML::_('select.options', nomHelperLoad::getlist('curso'), 'id', 'class="inputbox" size="1"', 'id', 'curso', $this->filter_curso);


		// state filter
		$lists['state']	= JHTML::_('grid.state',  $this->filter_state );

		// table ordering
		$lists['order_Dir']	= $this->filter_order_Dir;
		$lists['order']		= $this->filter_order;

		// search filter
		$lists['search']= $this->search;

		return $lists;
	}

	function getTotal()
	{
		// Load the content if it doesn't already exist
		if (empty($this->_total)) {
			$query = $this->_buildQuery();
			$this->_total = $this->_getListCount($query);
		}
		return $this->_total;
	}

	function getPagination()
	{
		// Load the content if it doesn't already exist
		if (empty($this->_pagination)) {
			jimport('joomla.html.pagination');
			$this->_pagination = new JPagination($this->getTotal(), $this->getState('limitstart'), $this->getState('limit') );
		}
		return $this->_pagination;
	}
}
