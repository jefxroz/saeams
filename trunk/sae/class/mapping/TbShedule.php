<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbCourse.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUser.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbClassRoom.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbDetailAssignation.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryShedule.php');

/**
 * @access public
 * @package mapping
 */
class TbShedule {
	/**
	 * @AttributeType int
	 */
	private $_idShedule;
	/**
	 * @AttributeType Time
	 */
	private $_starttime;
	/**
	 * @AttributeType Time
	 */
	private $_endtime;
	/**
	 * @AttributeType Date
	 */
	private $_startdate;
	/**
	 * @AttributeType Date
	 */
	private $_enddate;
	/**
	 * @AttributeType int
	 */
	private $_state;
	/**
	 * @AttributeType BigDecimal
	 */
	private $_price;
	/**
	 * @AssociationType mapping.TbCourse
	 * @AssociationMultiplicity 1
	 */
	public $_idCourse;
	/**
	 * @AssociationType mapping.TbUser
	 * @AssociationMultiplicity 1
	 */
	public $_idUser;
	/**
	 * @AssociationType mapping.TbClassRoom
	 * @AssociationMultiplicity 1
	 */
	public $_idClassRoom;
	/**
	 * @AssociationType mapping.TbDetailAssignation
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbDetailAssignation = array();
	/**
	 * @AssociationType mapping.TbHistoryShedule
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryShedule = array();
}
?>