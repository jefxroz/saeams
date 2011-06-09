<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbRol.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUser.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryUserRol.php');

/**
 * @access public
 * @package mapping
 */
class TbUserRol {
	/**
	 * @AssociationType mapping.TbRol
	 * @AssociationMultiplicity 1
	 */
	public $_tbRolidRol;
	/**
	 * @AssociationType mapping.TbUser
	 * @AssociationMultiplicity 1
	 */
	public $_tbUseridUser;
	/**
	 * @AssociationType mapping.TbHistoryUserRol
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryUserRol = array();
}
?>