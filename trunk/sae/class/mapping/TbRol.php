<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUserRol.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPrivilegeRol.php');

/**
 * @access public
 * @package mapping
 */
class TbRol {
	/**
	 * @AttributeType int
	 */
	private $_idRol;
	/**
	 * @AttributeType String
	 */
	private $_name;
	/**
	 * @AssociationType mapping.TbUserRol
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbUserRol = array();
	/**
	 * @AssociationType mapping.TbPrivilegeRol
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbPrivilegeRol = array();
}
?>