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
 * @orm TbHistoryDetailAssignation
 */
class TbHistoryDetailAssignation {
  public function deleteAndDissociate() {
    if($this->getIdUser() != null) {
      foreach($this->getIdUser()->tbHistoryDetailAssignation as $index => $obj) {
        if (($obj->idHistoryDetailAssignation == $this->idHistoryDetailAssignation)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUser()->tbHistoryDetailAssignation[$index] = null;
        }
      }
    }
    if($this->getIdDetailAssignation() != null) {
      foreach($this->getIdDetailAssignation()->tbHistoryDetailAssignation as $index => $obj) {
        if (($obj->idHistoryDetailAssignation == $this->idHistoryDetailAssignation)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdDetailAssignation()->tbHistoryDetailAssignation[$index] = null;
        }
      }
    }
    if($this->getIdPage() != null) {
      foreach($this->getIdPage()->tbHistoryDetailAssignation as $index => $obj) {
        if (($obj->idHistoryDetailAssignation == $this->idHistoryDetailAssignation)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdPage()->tbHistoryDetailAssignation[$index] = null;
        }
      }
    }
    return true;
  }
  
  /**
   * @orm idHistoryDetailAssignation int
   * @dbva id(autogenerate) 
   */
  private $idHistoryDetailAssignation;
  
  /**
   * @orm has one TbUser inverse(tbHistoryDetailAssignation)
   * @dbva fk(idUser) 
   */
  private $idUser;
  
  /**
   * @orm IdAssignation int
   */
  private $idAssignation;
  
  /**
   * @orm Startdate datetime
   */
  private $startdate;
  
  /**
   * @orm Historydate datetime
   */
  private $historydate;
  
  /**
   * @orm Operation char
   */
  private $operation;
  
  /**
   * @orm has one TbDetailAssignation inverse(tbHistoryDetailAssignation)
   * @dbva fk(idDetailAssignation) 
   */
  private $idDetailAssignation;
  
  /**
   * @orm has one TbPage inverse(tbHistoryDetailAssignation)
   * @dbva fk(idPage) 
   */
  private $idPage;
  
  /**
   * @orm IdShedule int
   */
  private $idShedule;
  
  public function &getIdHistoryDetailAssignation() {
    return $this->idHistoryDetailAssignation;
  }
  
  
  public function setIdHistoryDetailAssignation(&$idHistoryDetailAssignation) {
    $this->idHistoryDetailAssignation = $idHistoryDetailAssignation;
  }
  
  
  public function &getIdAssignation() {
    return $this->idAssignation;
  }
  
  
  public function setIdAssignation(&$idAssignation) {
    $this->idAssignation = $idAssignation;
  }
  
  
  public function &getStartdate() {
    return $this->startdate;
  }
  
  
  public function setStartdate(&$startdate) {
    $this->startdate = $startdate;
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
  
  
  public function &getIdShedule() {
    return $this->idShedule;
  }
  
  
  public function setIdShedule(&$idShedule) {
    $this->idShedule = $idShedule;
  }
  
  
  public function &getIdUser() {
    return $this->idUser;
  }
  
  
  public function setIdUser(&$idUser) {
    $this->idUser = $idUser;
  }
  
  
  public function &getIdDetailAssignation() {
    return $this->idDetailAssignation;
  }
  
  
  public function setIdDetailAssignation(&$idDetailAssignation) {
    $this->idDetailAssignation = $idDetailAssignation;
  }
  
  
  public function &getIdPage() {
    return $this->idPage;
  }
  
  
  public function setIdPage(&$idPage) {
    $this->idPage = $idPage;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idHistoryDetailAssignation;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idHistoryDetailAssignation' . '=' . $this->idHistoryDetailAssignation. ' ';
      if ($this->idUser instanceof epObject)  {
        $s .= 'idUser.Persist_ID=' . $this->idUser->toString(true). ' ';
      }
      else {
        $s .= 'idUser=null ';
      }
      
      $s .= 'idAssignation' . '=' . $this->idAssignation. ' ';
      $s .= 'startdate' . '=' . $this->startdate. ' ';
      $s .= 'historydate' . '=' . $this->historydate. ' ';
      $s .= 'operation' . '=' . $this->operation. ' ';
      if ($this->idDetailAssignation instanceof epObject)  {
        $s .= 'idDetailAssignation.Persist_ID=' . $this->idDetailAssignation->toString(true). ' ';
      }
      else {
        $s .= 'idDetailAssignation=null ';
      }
      
      if ($this->idPage instanceof epObject)  {
        $s .= 'idPage.Persist_ID=' . $this->idPage->toString(true). ' ';
      }
      else {
        $s .= 'idPage=null ';
      }
      
      $s .= 'idShedule' . '=' . $this->idShedule. ' ';
      $s .= ']';
    }
    
    return $s;
  }
  
}

?>
