<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUser.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbDetailAssignation.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPage.php');

/**
 * @access public
 * @package mapping
 */
class TbHistoryDetailAssignation {
	/**
	 * @AttributeType int
	 */
	private $_idtbHistoryDetailAssignation;
	/**
	 * @AttributeType Integer
	 */
	private $_idAssignation;
	/**
	 * @AttributeType Timestamp
	 */
	private $_startdate;
	/**
	 * @AttributeType Timestamp
	 */
	private $_historydate;
	/**
	 * @AttributeType String
	 */
	private $_operation;
	/**
	 * @AttributeType int
	 */
	private $_idShedule;
	/**
	 * @AssociationType mapping.TbUser
	 * @AssociationMultiplicity 0..1
	 */
	public $_idUser;
	/**
	 * @AssociationType mapping.TbDetailAssignation
	 * @AssociationMultiplicity 1
	 */
	public $_idDetailAssignation;
	/**
	 * @AssociationType mapping.TbPage
	 * @AssociationMultiplicity 1
	 */
	public $_idPage;
}
?>