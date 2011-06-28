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
 * @orm TbPrivilegeRol
 */
class TbPrivilegeRol {
  public function deleteAndDissociate() {
    if($this->getLidRol() != null) {
      foreach($this->getLidRol()->tbPrivilegeRol as $index => $obj) {
        if (($obj->lidRol == $this->lidRol) && ($obj->idPrivilege == $this->idPrivilege)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getLidRol()->tbPrivilegeRol[$index] = null;
        }
      }
    }
    if($this->getIdPrivilege() != null) {
      foreach($this->getIdPrivilege()->tbPrivilegeRol as $index => $obj) {
        if (($obj->lidRol == $this->lidRol) && ($obj->idPrivilege == $this->idPrivilege)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdPrivilege()->tbPrivilegeRol[$index] = null;
        }
      }
    }
    foreach($this->tbHistoryPrivilegeRol as $lTbHistoryPrivilegeRol) {
      $lTbHistoryPrivilegeRol->setLidRol(null);
    }
    return true;
  }
  
  /**
   * @orm has one TbRol inverse(tbPrivilegeRol)
   * @dbva id fk(idRol) 
   */
  private $lidRol;
  
  /**
   * @orm has one TbPrivilege inverse(tbPrivilegeRol)
   * @dbva id fk(idPrivilege) 
   */
  private $idPrivilege;
  
  /**
   * @orm has many TbHistoryPrivilegeRol inverse(lidRol)
   * @dbva inverse(idRol,idPrivilege) 
   */
  private $tbHistoryPrivilegeRol;
  
  public function &getLidRol() {
    return $this->lidRol;
  }
  
  
  public function setLidRol(&$lidRol) {
    $this->lidRol = $lidRol;
  }
  
  
  public function &getIdPrivilege() {
    return $this->idPrivilege;
  }
  
  
  public function setIdPrivilege(&$idPrivilege) {
    $this->idPrivilege = $idPrivilege;
  }
  
  
  public function getTbHistoryPrivilegeRol() {
    return $this->tbHistoryPrivilegeRol;
  }
  
  
  public function setTbHistoryPrivilegeRol($tbHistoryPrivilegeRol) {
    $this->tbHistoryPrivilegeRol = $tbHistoryPrivilegeRol;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->lidRol . ' ' . $this->idPrivilege;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      if ($this->lidRol instanceof epObject)  {
        $s .= 'lidRol.Persist_ID=' . $this->lidRol->toString(true). ' ';
      }
      else {
        $s .= 'lidRol=null ';
      }
      
      if ($this->idPrivilege instanceof epObject)  {
        $s .= 'idPrivilege.Persist_ID=' . $this->idPrivilege->toString(true). ' ';
      }
      else {
        $s .= 'idPrivilege=null ';
      }
      
      $s .= 'count tbHistoryPrivilegeRol'. '=' ;
      if($this->tbHistoryPrivilegeRol) {
        $s .= $this->tbHistoryPrivilegeRol->count() . ' ';
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
