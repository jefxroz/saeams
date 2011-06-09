<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPrivilegeRol.php');

/**
 * @access public
 * @package mapping
 */
class TbPrivilege {
	/**
	 * @AttributeType int
	 */
	private $_idPrivilege;
	/**
	 * @AttributeType String
	 */
	private $_name;
	/**
	 * @AttributeType Integer
	 */
	private $_state;
	/**
	 * @AssociationType mapping.TbPrivilegeRol
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbPrivilegeRol = array();
}
?>