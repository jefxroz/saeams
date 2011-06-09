<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryPage.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryShedule.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryAssignation.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryUser.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryCourse.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryPrivilegeRol.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryDetailAssignation.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryUserRol.php');

/**
 * @access public
 * @package mapping
 */
class TbPage {
	/**
	 * @AttributeType int
	 */
	private $_idPage;
	/**
	 * @AttributeType String
	 */
	private $_name;
	/**
	 * @AssociationType mapping.TbHistoryPage
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryPage = array();
	/**
	 * @AssociationType mapping.TbHistoryShedule
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryShedule = array();
	/**
	 * @AssociationType mapping.TbHistoryAssignation
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryAssignation = array();
	/**
	 * @AssociationType mapping.TbHistoryUser
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryUser = array();
	/**
	 * @AssociationType mapping.TbHistoryCourse
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryCourse = array();
	/**
	 * @AssociationType mapping.TbHistoryPrivilegeRol
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryPrivilegeRol = array();
	/**
	 * @AssociationType mapping.TbHistoryDetailAssignation
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryDetailAssignation = array();
	/**
	 * @AssociationType mapping.TbHistoryUserRol
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryUserRol = array();
}
?>