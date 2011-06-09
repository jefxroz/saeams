<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUser.php');

/**
 * @access public
 * @package mapping
 */
class TbTypeTrainer {
	/**
	 * @AttributeType int
	 */
	private $_idTypeTrainer;
	/**
	 * @AttributeType String
	 */
	private $_name;
	/**
	 * @AttributeType Integer
	 */
	private $_state;
	/**
	 * @AssociationType mapping.TbUser
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbUser = array();
}
?>