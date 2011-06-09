<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbCourse.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUser.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbClassRoom.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPage.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbShedule.php');

/**
 * @access public
 * @package mapping
 */
class TbHistoryShedule {
	/**
	 * @AttributeType int
	 */
	private $_idHistoryShedule;
	/**
	 * @AttributeType Time
	 */
	private $_starttime;
	/**
	 * @AttributeType Time
	 */
	private $_endtime;
	/**
	 * @AttributeType Timestamp
	 */
	private $_startdate;
	/**
	 * @AttributeType Timestamp
	 */
	private $_enddate;
	/**
	 * @AttributeType Integer
	 */
	private $_state;
	/**
	 * @AttributeType BigDecimal
	 */
	private $_price;
	/**
	 * @AttributeType String
	 */
	private $_operation;
	/**
	 * @AttributeType Timestamp
	 */
	private $_historydate;
	/**
	 * @AssociationType mapping.TbCourse
	 * @AssociationMultiplicity 0..1
	 */
	public $_idCourse;
	/**
	 * @AssociationType mapping.TbUser
	 * @AssociationMultiplicity 0..1
	 */
	public $_idUserTrainer;
	/**
	 * @AssociationType mapping.TbClassRoom
	 * @AssociationMultiplicity 1
	 */
	public $_idClassRoom;
	/**
	 * @AssociationType mapping.TbPage
	 * @AssociationMultiplicity 1
	 */
	public $_idPage;
	/**
	 * @AssociationType mapping.TbShedule
	 * @AssociationMultiplicity 1
	 */
	public $_idShedule;
}
?>