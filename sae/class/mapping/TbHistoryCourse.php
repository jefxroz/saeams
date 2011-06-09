<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbCourse.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPage.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUser.php');

/**
 * @access public
 * @package mapping
 */
class TbHistoryCourse {
	/**
	 * @AttributeType int
	 */
	private $_idHistoryCourse;
	/**
	 * @AttributeType String
	 */
	private $_name;
	/**
	 * @AttributeType String
	 */
	private $_descritption;
	/**
	 * @AttributeType int
	 */
	private $_duration;
	/**
	 * @AttributeType int
	 */
	private $_state;
	/**
	 * @AttributeType Timestamp
	 */
	private $_historydate;
	/**
	 * @AttributeType String
	 */
	private $_operation;
	/**
	 * @AssociationType mapping.TbCourse
	 * @AssociationMultiplicity 0..1
	 */
	public $_idCourse;
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