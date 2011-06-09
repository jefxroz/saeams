<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbCourse.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryInstitucion.php');

/**
 * @access public
 * @package mapping
 */
class TbInstitution {
	/**
	 * @AttributeType int
	 */
	private $_idInstitution;
	/**
	 * @AttributeType String
	 */
	private $_name;
	/**
	 * @AttributeType int
	 */
	private $_state;
	/**
	 * @AssociationType mapping.TbCourse
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbCourse = array();
	/**
	 * @AssociationType mapping.TbHistoryInstitucion
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryInstitucion = array();
}
?>