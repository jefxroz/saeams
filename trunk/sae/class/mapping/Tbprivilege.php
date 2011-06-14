<?php
/**
 * "Visual Paradigm: DO NOT MODIFY THIS FILE!"
 * 
 * This is an automatic generated file. It will be regenerated every time 
 * you generate persistence class.
 * 
 * Modifying its content may cause the program not work, or your work may lost.
 */

/**
 * Licensee: DuKe TeAm
 * License Type: Purchased
 */

/**
 * @orm TbPrivilege
 */
class TbPrivilege {
  public function deleteAndDissociate() {
    foreach($this->tbPrivilegeRol as $lTbPrivilegeRol) {
      $lTbPrivilegeRol->setIdPrivilege(null);
    }
    return true;
  }
  
  /**
   * @orm idPrivilege int
   * @dbva id(autogenerate) 
   */
  private $idPrivilege;
  
  /**
   * @orm Name char
   */
  private $name;
  
  /**
   * @orm State int
   */
  private $state;
  
  /**
   * @orm has many TbPrivilegeRol inverse(idPrivilege)
   * @dbva inverse(idPrivilege) 
   */
  private $tbPrivilegeRol;
  
  public function &getIdPrivilege() {
    return $this->idPrivilege;
  }
  
  
  public function setIdPrivilege(&$idPrivilege) {
    $this->idPrivilege = $idPrivilege;
  }
  
  
  public function &getName() {
    return $this->name;
  }
  
  
  public function setName(&$name) {
    $this->name = $name;
  }
  
  
  public function &getState() {
    return $this->state;
  }
  
  
  public function setState(&$state) {
    $this->state = $state;
  }
  
  
  public function getTbPrivilegeRol() {
    return $this->tbPrivilegeRol;
  }
  
  
  public function setTbPrivilegeRol($tbPrivilegeRol) {
    $this->tbPrivilegeRol = $tbPrivilegeRol;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idPrivilege;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idPrivilege' . '=' . $this->idPrivilege. ' ';
      $s .= 'name' . '=' . $this->name. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
      $s .= 'count tbPrivilegeRol'. '=' ;
      if($this->tbPrivilegeRol) {
        $s .= $this->tbPrivilegeRol->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= ']';
    }
    
    return $s;
  }
  
}

?>
