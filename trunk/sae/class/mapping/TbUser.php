<?php
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbTypeTrainer.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbShedule.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryUser.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryShedule.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbAssignation.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryDetailAssignation.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbUserRol.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryPrivilegeRol.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryUserRol.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryAssignation.php');
require_once(realpath(dirname(__FILE__)) . '/../mapping/TbHistoryCourse.php');

/**
 * @access public
 * @package mapping
 */
class TbUser {
	/**
	 * @AttributeType int
	 */
	private $_idUser;
	/**
	 * @AttributeType String
	 */
	private $_name;
	/**
	 * @AttributeType Integer
	 */
	private $_carnet;
	/**
	 * @AttributeType String
	 */
	private $_mail;
	/**
	 * @AttributeType String
	 */
	private $_password;
	/**
	 * @AttributeType String
	 */
	private $_gender;
	/**
	 * @AttributeType int
	 */
	private $_age;
	/**
	 * @AttributeType Integer
	 */
	private $_unit;
	/**
	 * @AttributeType String
	 */
	private $_id;
	/**
	 * @AttributeType Integer
	 */
	private $_extention;
	/**
	 * @AttributeType Integer
	 */
	private $_career;
	/**
	 * @AttributeType String
	 */
	private $_address;
	/**
	 * @AttributeType int
	 */
	private $_state;
	/**
	 * @AssociationType mapping.TbTypeTrainer
	 * @AssociationMultiplicity 0..1
	 */
	public $_idTypeTrainer;
	/**
	 * @AssociationType mapping.TbShedule
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbShedule = array();
	/**
	 * @AssociationType mapping.TbHistoryUser
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryUser = array();
	/**
	 * @AssociationType mapping.TbHistoryShedule
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryShedule = array();
	/**
	 * @AssociationType mapping.TbAssignation
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbAssignation = array();
	/**
	 * @AssociationType mapping.TbHistoryDetailAssignation
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryDetailAssignation = array();
	/**
	 * @AssociationType mapping.TbUserRol
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbUserRol = array();
	/**
	 * @AssociationType mapping.TbHistoryPrivilegeRol
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryPrivilegeRol = array();
	/**
	 * @AssociationType mapping.TbHistoryUserRol
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryUserRol = array();
	/**
	 * @AssociationType mapping.TbHistoryAssignation
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryAssignation = array();
	/**
	 * @AssociationType mapping.TbHistoryCourse
	 * @AssociationMultiplicity 0..*
	 */
	public $_tbHistoryCourse = array();
}
?>