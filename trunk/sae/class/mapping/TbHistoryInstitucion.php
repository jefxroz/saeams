<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbInstitution.php');

/**
 * @access public
 * @package mapping
 */
class TbHistoryInstitucion {
	/**
	 * @AttributeType int
	 */
	private $_idHistoryInstitution;
	/**
	 * @AttributeType String
	 */
	private $_name;
	/**
	 * @AttributeType Timestamp
	 */
	private $_historydate;
	/**
	 * @AttributeType String
	 */
	private $_operation;
	/**
	 * @AttributeType Integer
	 */
	private $_state;
	/**
	 * @AssociationType mapping.TbInstitution
	 * @AssociationMultiplicity 0..1
	 */
	public $_idInstitution;
}
?>