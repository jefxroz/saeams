<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbPage.php');

/**
 * @access public
 * @package mapping
 */
class TbHistoryPage {
	/**
	 * @AttributeType int
	 */
	private $_idHistoryPage;
	/**
	 * @AttributeType String
	 */
	private $_name;
	/**
	 * @AttributeType Integer
	 */
	private $_version;
	/**
	 * @AttributeType String
	 */
	private $_iduserdeveloper;
	/**
	 * @AssociationType mapping.TbPage
	 * @AssociationMultiplicity 1
	 */
	public $_idPage;
}
?>