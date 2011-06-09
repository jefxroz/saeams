<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbInstitution.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbShedule.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryShedule.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryCourse.php');

/**
 * @access public
 * @package mapping
 */
class TbCourse {
	/**
	 * @AttributeType int
	 */
	private $_idCourse;
	/**
	 * @AttributeType String
	 */
	private $_name;
	/**
	 * @AttributeType String
	 */
	private $_description;
	/**
	 * @AttributeType int
	 */
	private $_duration;
	/**
	 * @AttributeType int
	 */
	private $_state;
	/**
	 * @AssociationType mapping.TbInstitution
	 * @AssociationMultiplicity 0..1
	 */
	public $_idInstitution;
	/**
	 * @AssociationType mapping.TbShedule
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbShedule = array();
	/**
	 * @AssociationType mapping.TbHistoryShedule
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryShedule = array();
	/**
	 * @AssociationType mapping.TbHistoryCourse
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryCourse = array();
}
?>