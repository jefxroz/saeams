<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbShedule.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbAssignation.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryDetailAssignation.php');

/**
 * @access public
 * @package mapping
 */
class TbDetailAssignation {
	/**
	 * @AttributeType int
	 */
	private $_idDetailAssignation;
	/**
	 * @AttributeType Timestamp
	 */
	private $_date;
	/**
	 * @AssociationType mapping.TbShedule
	 * @AssociationMultiplicity 0..1
	 */
	public $_tbSheduleidShedule;
	/**
	 * @AssociationType mapping.TbAssignation
	 * @AssociationMultiplicity 0..1
	 */
	public $_idAssignation;
	/**
	 * @AssociationType mapping.TbHistoryDetailAssignation
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryDetailAssignation = array();
}
?>