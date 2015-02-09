<?php
//----------------------------------------------------------------------
// Sophia
// Sophia by Alex Olave - http://www.alfazeta.cl
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Author: 	Alex Olave - http://www.alfazeta.cl
// Copyright: copyright (C) 2010 - Alex Olave
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

class SophiaControllerNotaCurso extends SophiaController
{
	function __construct()
	{
		parent::__construct();
		// Register Extra tasks
		$this->registerTask( 'add'  , 	'edit' );
		$this->registerTask( 'unpublish', 	'publish');

		$this->cid = JRequest::getVar( 'cid', array(0), '', 'array' );
		JArrayHelper::toInteger($this->cid, array(0));
	}
	function _buildQuery()
	{
		$this->_query = 'UPDATE #__sophia_notas'
		. ' SET published = ' . (int) $this->publish
		. ' WHERE id IN ( '. $this->cids .' )'
		;
		return $this->_query;
	}
	function edit()
	{
		JRequest::setVar( 'view', 'notacurso' );
		JRequest::setVar( 'layout', 'form'  );
		parent::display();
	}

	function cancel()
	{
		$msg = JText::_( 'Operation Cancelled' );
		$this->setRedirect( 'index.php?option=com_sophia&view=notas', $msg );
	}
	function publish()
	{
		$cid		= JRequest::getVar( 'cid', array(), '', 'array' );
		$this->publish	= ( $this->getTask() == 'publish' ? 1 : 0 );

		JArrayHelper::toInteger($cid);
		if (count( $cid ) < 1)
		{
			$action = $publish ? 'publish' : 'unpublish';
			JError::raiseError(500, JText::_( 'Select an item to' .$action, true ) );
		}

		$this->cids = implode( ',', $cid );

		$query = $this->_buildQuery();
		$db = &JFactory::getDBO();
		$db->setQuery($query);
		if (!$db->query())
		{
			JError::raiseError(500, $db->getErrorMsg() );
		}
		$link = 'index.php?option=com_sophia&view=notas';
		$this->setRedirect($link, $msg);
	}

	function save()
	{

		$Backmsg = JText::_( 'Debe Selecionar los alumnos a Grabar Favor Reintente, gracias '  );
		$link = 'index.php?option=com_sophia&view=notascursos';
		$db = &JFactory::getDBO();
			
		$post	= JRequest::get('post');
		$nota	   = JRequest::getVar( 'nota', array(), 'post', 'array' );
		JArrayHelper::toInteger( $nota );

		$curso	= JRequest::getVar( 'curso_id',0 );

		$evaluacion_id =JRequest::getVar( 'evaluacion_id',0 );


		$alumno	   = JRequest::getVar( 'alumno',array(), 'post', 'array' );
		JArrayHelper::toInteger( $alumno );


		if (!is_array( $alumno ) || count( $alumno ) < 1) {
			echo "<script> alert('". JText::_( 'Seleciones un Item para Grabar', true )."');</script>\n";
			$this->setRedirect( $link, $Backmsg );
		}

		 
		$model = $this->getModel( 'notacurso' );

			
		if (count( $alumno )) {
			for($i=0; $i < count( $alumno ); $i++) {

				$alumnos = $alumno[$i];
				$notas       = $nota[$i];
				if ($notas>0){
					$query = "INSERT INTO #__sophia_notas (evaluacion_id,matricula_id,nota)"
					."\n VALUES "
					."\n ('$evaluacion_id','$alumnos', '$notas')";

					$db->setQuery($query);

					//echo $query;
					if (!$db->query()) {
						echo "<script> alert('".$db->getErrorMsg()."'); window.history.go(-1); </script>\n";
					}
				}
			}
		}

		$msg .= JText::_( 'Se ha guardado la informacion para los '.$i.' Alumnos seleccionados'  );
			

		$this->setRedirect( $link, $msg );
	}

	function remove()
	{
		$model = $this->getModel('nota');
		if(!$model->delete()) {
			$msg = JText::_( 'Error Deleting Item' );
		} else {
			$cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );
			foreach($cids as $cid) {
				$msg .= JText::_( 'Item Deleted '.' : '.$cid );
			}
		}

		$this->setRedirect( 'index.php?option=com_sophia&view=notas', $msg );
	}

}
