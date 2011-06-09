<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUser.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbDetailAssignation.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryAssignation.php');

/**
 * @access public
 * @package mapping
 */
class TbAssignation {
	/**
	 * @AttributeType int
	 */
	private $_idAssignation;
	/**
	 * @AttributeType Timestamp
	 */
	private $_startdate;
	/**
	 * @AttributeType int
	 */
	private $_state;
	/**
	 * @AssociationType mapping.TbUser
	 * @AssociationMultiplicity 1
	 */
	public $_idUserStudent;
	/**
	 * @AssociationType mapping.TbDetailAssignation
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbDetailAssignation = array();
	/**
	 * @AssociationType mapping.TbHistoryAssignation
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryAssignation = array();
}
?>