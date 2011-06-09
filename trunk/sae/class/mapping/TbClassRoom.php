<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbShedule.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryShedule.php');

/**
 * @access public
 * @package mapping
 */
class TbClassRoom {
	/**
	 * @AttributeType int
	 */
	private $_idClassRoom;
	/**
	 * @AttributeType String
	 */
	private $_name;
	/**
	 * @AttributeType String
	 */
	private $_address;
	/**
	 * @AttributeType BigDecimal
	 */
	private $_quota;
	/**
	 * @AttributeType int
	 */
	private $_state;
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
}
?>