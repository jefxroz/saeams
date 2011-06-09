<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbRol.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPrivilege.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryPrivilegeRol.php');

/**
 * @access public
 * @package mapping
 */
class TbPrivilegeRol {
	/**
	 * @AssociationType mapping.TbRol
	 * @AssociationMultiplicity 1
	 */
	public $_lidRol;
	/**
	 * @AssociationType mapping.TbPrivilege
	 * @AssociationMultiplicity 1
	 */
	public $_idPrivilege;
	/**
	 * @AssociationType mapping.TbHistoryPrivilegeRol
	 * @AssociationMultiplicity 1..*
	 */
	public $_tbHistoryPrivilegeRol = array();
}
?>