<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbAssignation.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPage.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUser.php');

/**
 * @access public
 * @package mapping
 */
class TbHistoryAssignation {
	/**
	 * @AttributeType int
	 */
	private $_idHistoryAssignation;
	/**
	 * @AttributeType Timestamp
	 */
	private $_historydate;
	/**
	 * @AttributeType String
	 */
	private $_operation;
	/**
	 * @AttributeType Timestamp
	 */
	private $_startdate;
	/**
	 * @AttributeType Integer
	 */
	private $_state;
	/**
	 * @AssociationType mapping.TbAssignation
	 * @AssociationMultiplicity 0..1
	 */
	public $_idAssignation;
	/**
	 * @AssociationType mapping.TbPage
	 * @AssociationMultiplicity 1
	 */
	public $_idPage;
	/**
	 * @AssociationType mapping.TbUser
	 * @AssociationMultiplicity 1
	 */
	public $_idUser;
}
?>