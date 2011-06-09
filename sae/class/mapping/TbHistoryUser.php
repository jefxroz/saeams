<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUser.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPage.php');

/**
 * @access public
 * @package mapping
 */
class TbHistoryUser {
	/**
	 * @AttributeType int
	 */
	private $_idHistoryUser;
	/**
	 * @AttributeType Integer
	 */
	private $_name;
	/**
	 * @AttributeType Integer
	 */
	private $_carne;
	/**
	 * @AttributeType String
	 */
	private $_password;
	/**
	 * @AttributeType Integer
	 */
	private $_gender;
	/**
	 * @AttributeType Integer
	 */
	private $_age;
	/**
	 * @AttributeType Integer
	 */
	private $_unit;
	/**
	 * @AttributeType Integer
	 */
	private $_extension;
	/**
	 * @AttributeType Integer
	 */
	private $_career;
	/**
	 * @AttributeType String
	 */
	private $_address;
	/**
	 * @AttributeType String
	 */
	private $_operation;
	/**
	 * @AttributeType Timestamp
	 */
	private $_historydate;
	/**
	 * @AttributeType Integer
	 */
	private $_state;
	/**
	 * @AttributeType Integer
	 */
	private $_id;
	/**
	 * @AssociationType mapping.TbUser
	 * @AssociationMultiplicity 0..1
	 */
	public $_idUser;
	/**
	 * @AssociationType mapping.TbPage
	 * @AssociationMultiplicity 1
	 */
	public $_idPage;
}
?>