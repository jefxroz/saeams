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
 * @orm TbHistoryPrivilegeRol
 */
class TbHistoryPrivilegeRol {
  public function deleteAndDissociate() {
    if($this->getLidRol() != null) {
      foreach($this->getLidRol()->tbHistoryPrivilegeRol as $index => $obj) {
        if (($obj->idHistoryPrivilege == $this->idHistoryPrivilege)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getLidRol()->tbHistoryPrivilegeRol[$index] = null;
        }
      }
    }
    if($this->getIdPage() != null) {
      foreach($this->getIdPage()->tbHistoryPrivilegeRol as $index => $obj) {
        if (($obj->idHistoryPrivilege == $this->idHistoryPrivilege)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdPage()->tbHistoryPrivilegeRol[$index] = null;
        }
      }
    }
    if($this->getIdUser() != null) {
      foreach($this->getIdUser()->tbHistoryPrivilegeRol as $index => $obj) {
        if (($obj->idHistoryPrivilege == $this->idHistoryPrivilege)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUser()->tbHistoryPrivilegeRol[$index] = null;
        }
      }
    }
    return true;
  }
  
  /**
   * @orm idHistoryPrivilege int
   * @dbva id(autogenerate) 
   */
  private $idHistoryPrivilege;
  
  /**
   * @orm has one TbPrivilegeRol inverse(tbHistoryPrivilegeRol)
   * @dbva fk(idRol,idPrivilege) 
   */
  private $lidRol;
  
  /**
   * @orm has one TbPage inverse(tbHistoryPrivilegeRol)
   * @dbva fk(idPage) 
   */
  private $idPage;
  
  /**
   * @orm has one TbUser inverse(tbHistoryPrivilegeRol)
   * @dbva fk(idUser) 
   */
  private $idUser;
  
  /**
   * @orm Historydate datetime
   */
  private $historydate;
  
  /**
   * @orm Operation char
   */
  private $operation;
  
  public function &getIdHistoryPrivilege() {
    return $this->idHistoryPrivilege;
  }
  
  
  public function setIdHistoryPrivilege(&$idHistoryPrivilege) {
    $this->idHistoryPrivilege = $idHistoryPrivilege;
  }
  
  
  public function &getHistorydate() {
    return $this->historydate;
  }
  
  
  public function setHistorydate(&$historydate) {
    $this->historydate = $historydate;
  }
  
  
  public function &getOperation() {
    return $this->operation;
  }
  
  
  public function setOperation(&$operation) {
    $this->operation = $operation;
  }
  
  
  public function &getLidRol() {
    return $this->lidRol;
  }
  
  
  public function setLidRol(&$lidRol) {
    $this->lidRol = $lidRol;
  }
  
  
  public function &getIdPage() {
    return $this->idPage;
  }
  
  
  public function setIdPage(&$idPage) {
    $this->idPage = $idPage;
  }
  
  
  public function &getIdUser() {
    return $this->idUser;
  }
  
  
  public function setIdUser(&$idUser) {
    $this->idUser = $idUser;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idHistoryPrivilege;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idHistoryPrivilege' . '=' . $this->idHistoryPrivilege. ' ';
      if ($this->lidRol instanceof epObject)  {
        $s .= 'lidRol.Persist_ID=' . $this->lidRol->toString(true). ' ';
      }
      else {
        $s .= 'lidRol=null ';
      }
      
      if ($this->idPage instanceof epObject)  {
        $s .= 'idPage.Persist_ID=' . $this->idPage->toString(true). ' ';
      }
      else {
        $s .= 'idPage=null ';
      }
      
      if ($this->idUser instanceof epObject)  {
        $s .= 'idUser.Persist_ID=' . $this->idUser->toString(true). ' ';
      }
      else {
        $s .= 'idUser=null ';
      }
      
      $s .= 'historydate' . '=' . $this->historydate. ' ';
      $s .= 'operation' . '=' . $this->operation. ' ';
      $s .= ']';
    }
    
    return $s;
  }
  
}

?>
