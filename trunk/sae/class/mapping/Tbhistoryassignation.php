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
 * @orm TbHistoryAssignation
 */
class TbHistoryAssignation {
  public function deleteAndDissociate() {
    if($this->getIdAssignation() != null) {
      foreach($this->getIdAssignation()->tbHistoryAssignation as $index => $obj) {
        if (($obj->idHistoryAssignation == $this->idHistoryAssignation)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdAssignation()->tbHistoryAssignation[$index] = null;
        }
      }
    }
    if($this->getIdPage() != null) {
      foreach($this->getIdPage()->tbHistoryAssignation as $index => $obj) {
        if (($obj->idHistoryAssignation == $this->idHistoryAssignation)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdPage()->tbHistoryAssignation[$index] = null;
        }
      }
    }
    if($this->getIdUser() != null) {
      foreach($this->getIdUser()->tbHistoryAssignation as $index => $obj) {
        if (($obj->idHistoryAssignation == $this->idHistoryAssignation)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUser()->tbHistoryAssignation[$index] = null;
        }
      }
    }
    if($this->getIdUserDeveloper() != null) {
      foreach($this->getIdUserDeveloper()->tbHistoryAssignation1 as $index => $obj) {
        if (($obj->idHistoryAssignation == $this->idHistoryAssignation)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUserDeveloper()->tbHistoryAssignation1[$index] = null;
        }
      }
    }
    return true;
  }
  
  /**
   * @orm idHistoryAssignation int
   * @dbva id(autogenerate) 
   */
  private $idHistoryAssignation;
  
  /**
   * @orm has one TbAssignation inverse(tbHistoryAssignation)
   * @dbva fk(idAssignation) 
   */
  private $idAssignation;
  
  /**
   * @orm has one TbPage inverse(tbHistoryAssignation)
   * @dbva fk(idPage) 
   */
  private $idPage;
  
  /**
   * @orm Historydate datetime
   */
  private $historydate;
  
  /**
   * @orm Operation char
   */
  private $operation;
  
  /**
   * @orm has one TbUser inverse(tbHistoryAssignation)
   * @dbva fk(idUser) 
   */
  private $idUser;
  
  /**
   * @orm Startdate datetime
   */
  private $startdate;
  
  /**
   * @orm State int
   */
  private $state;
  
  /**
   * @orm has one TbUser inverse(tbHistoryAssignation1)
   * @dbva fk(idUserDeveloper) 
   */
  private $idUserDeveloper;
  
  public function &getIdHistoryAssignation() {
    return $this->idHistoryAssignation;
  }
  
  
  public function setIdHistoryAssignation(&$idHistoryAssignation) {
    $this->idHistoryAssignation = $idHistoryAssignation;
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
  
  
  public function &getStartdate() {
    return $this->startdate;
  }
  
  
  public function setStartdate(&$startdate) {
    $this->startdate = $startdate;
  }
  
  
  public function &getState() {
    return $this->state;
  }
  
  
  public function setState(&$state) {
    $this->state = $state;
  }
  
  
  public function &getIdAssignation() {
    return $this->idAssignation;
  }
  
  
  public function setIdAssignation(&$idAssignation) {
    $this->idAssignation = $idAssignation;
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
  
  
  public function &getIdUserDeveloper() {
    return $this->idUserDeveloper;
  }
  
  
  public function setIdUserDeveloper(&$idUserDeveloper) {
    $this->idUserDeveloper = $idUserDeveloper;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idHistoryAssignation;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idHistoryAssignation' . '=' . $this->idHistoryAssignation. ' ';
      if ($this->idAssignation instanceof epObject)  {
        $s .= 'idAssignation.Persist_ID=' . $this->idAssignation->toString(true). ' ';
      }
      else {
        $s .= 'idAssignation=null ';
      }
      
      if ($this->idPage instanceof epObject)  {
        $s .= 'idPage.Persist_ID=' . $this->idPage->toString(true). ' ';
      }
      else {
        $s .= 'idPage=null ';
      }
      
      $s .= 'historydate' . '=' . $this->historydate. ' ';
      $s .= 'operation' . '=' . $this->operation. ' ';
      if ($this->idUser instanceof epObject)  {
        $s .= 'idUser.Persist_ID=' . $this->idUser->toString(true). ' ';
      }
      else {
        $s .= 'idUser=null ';
      }
      
      $s .= 'startdate' . '=' . $this->startdate. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
      if ($this->idUserDeveloper instanceof epObject)  {
        $s .= 'idUserDeveloper.Persist_ID=' . $this->idUserDeveloper->toString(true). ' ';
      }
      else {
        $s .= 'idUserDeveloper=null ';
      }
      
      $s .= ']';
    }
    
    return $s;
  }
  
}

?>
