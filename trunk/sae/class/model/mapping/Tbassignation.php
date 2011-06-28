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
 * @orm TbAssignation
 */
class TbAssignation {
  public function deleteAndDissociate() {
    if($this->getIdUserStudent() != null) {
      foreach($this->getIdUserStudent()->tbAssignation as $index => $obj) {
        if (($obj->idAssignation == $this->idAssignation)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUserStudent()->tbAssignation[$index] = null;
        }
      }
    }
    foreach($this->tbDetailAssignation as $lTbDetailAssignation) {
      $lTbDetailAssignation->setIdAssignation(null);
    }
    foreach($this->tbHistoryAssignation as $lTbHistoryAssignation) {
      $lTbHistoryAssignation->setIdAssignation(null);
    }
    return true;
  }
  
  /**
   * @orm idAssignation int
   * @dbva id(autogenerate) 
   */
  private $idAssignation;
  
  /**
   * @orm has one TbUser inverse(tbAssignation)
   * @dbva fk(idUserStudent) 
   */
  private $idUserStudent;
  
  /**
   * @orm Startdate datetime
   */
  private $startdate;
  
  /**
   * @orm State int
   */
  private $state;
  
  /**
   * @orm has many TbDetailAssignation inverse(idAssignation)
   * @dbva inverse(idAssignation) 
   */
  private $tbDetailAssignation;
  
  /**
   * @orm has many TbHistoryAssignation inverse(idAssignation)
   * @dbva inverse(idAssignation) 
   */
  private $tbHistoryAssignation;
  
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
  
  
  public function &getState() {
    return $this->state;
  }
  
  
  public function setState(&$state) {
    $this->state = $state;
  }
  
  
  public function &getIdUserStudent() {
    return $this->idUserStudent;
  }
  
  
  public function setIdUserStudent(&$idUserStudent) {
    $this->idUserStudent = $idUserStudent;
  }
  
  
  public function getTbDetailAssignation() {
    return $this->tbDetailAssignation;
  }
  
  
  public function setTbDetailAssignation($tbDetailAssignation) {
    $this->tbDetailAssignation = $tbDetailAssignation;
  }
  
  
  public function getTbHistoryAssignation() {
    return $this->tbHistoryAssignation;
  }
  
  
  public function setTbHistoryAssignation($tbHistoryAssignation) {
    $this->tbHistoryAssignation = $tbHistoryAssignation;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idAssignation;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idAssignation' . '=' . $this->idAssignation. ' ';
      if ($this->idUserStudent instanceof epObject)  {
        $s .= 'idUserStudent.Persist_ID=' . $this->idUserStudent->toString(true). ' ';
      }
      else {
        $s .= 'idUserStudent=null ';
      }
      
      $s .= 'startdate' . '=' . $this->startdate. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
      $s .= 'count tbDetailAssignation'. '=' ;
      if($this->tbDetailAssignation) {
        $s .= $this->tbDetailAssignation->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryAssignation'. '=' ;
      if($this->tbHistoryAssignation) {
        $s .= $this->tbHistoryAssignation->count() . ' ';
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
