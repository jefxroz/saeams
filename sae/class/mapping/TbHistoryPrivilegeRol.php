<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPrivilegeRol.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPage.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUser.php');

/**
 * @access public
 * @package mapping
 */
class TbHistoryPrivilegeRol {
	/**
	 * @AttributeType int
	 */
	private $_idHistoryPrivilege;
	/**
	 * @AttributeType Timestamp
	 */
	private $_historydate;
	/**
	 * @AttributeType String
	 */
	private $_operation;
	/**
	 * @AssociationType mapping.TbPrivilegeRol
	 * @AssociationMultiplicity 0..1
	 */
	public $_lidRol;
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