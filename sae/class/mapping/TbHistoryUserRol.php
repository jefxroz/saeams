<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUserRol.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUser.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPage.php');

/**
 * @access public
 * @package mapping
 */
class TbHistoryUserRol {
	/**
	 * @AttributeType Timestamp
	 */
	private $_historydate;
	/**
	 * @AttributeType String
	 */
	private $_operation;
	/**
	 * @AssociationType mapping.TbUserRol
	 * @AssociationMultiplicity 1
	 */
	public $_idUser;
	/**
	 * @AssociationType mapping.TbUser
	 * @AssociationMultiplicity 1
	 */
	public $_idUserDeveloper;
	/**
	 * @AssociationType mapping.TbPage
	 * @AssociationMultiplicity 1
	 */
	public $_idPage;
}
?>