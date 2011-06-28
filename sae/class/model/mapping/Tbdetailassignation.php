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
 * @orm TbDetailAssignation
 */
class TbDetailAssignation {
  public function deleteAndDissociate() {
    if($this->getIdAssignation() != null) {
      foreach($this->getIdAssignation()->tbDetailAssignation as $index => $obj) {
        if (($obj->idDetailAssignation == $this->idDetailAssignation)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdAssignation()->tbDetailAssignation[$index] = null;
        }
      }
    }
    if($this->getTbSheduleidShedule() != null) {
      foreach($this->getTbSheduleidShedule()->tbDetailAssignation as $index => $obj) {
        if (($obj->idDetailAssignation == $this->idDetailAssignation)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getTbSheduleidShedule()->tbDetailAssignation[$index] = null;
        }
      }
    }
    foreach($this->tbHistoryDetailAssignation as $lTbHistoryDetailAssignation) {
      $lTbHistoryDetailAssignation->setIdDetailAssignation(null);
    }
    return true;
  }
  
  /**
   * @orm idDetailAssignation int
   * @dbva id(autogenerate) 
   */
  private $idDetailAssignation;
  
  /**
   * @orm has one TbAssignation inverse(tbDetailAssignation)
   * @dbva fk(idAssignation) 
   */
  private $idAssignation;
  
  /**
   * @orm `Date` datetime
   */
  private $date;
  
  /**
   * @orm has one TbShedule inverse(tbDetailAssignation)
   * @dbva fk(idShedule) 
   */
  private $tbSheduleidShedule;
  
  /**
   * @orm has many TbHistoryDetailAssignation inverse(idDetailAssignation)
   * @dbva inverse(idDetailAssignation) 
   */
  private $tbHistoryDetailAssignation;
  
  public function &getIdDetailAssignation() {
    return $this->idDetailAssignation;
  }
  
  
  public function setIdDetailAssignation(&$idDetailAssignation) {
    $this->idDetailAssignation = $idDetailAssignation;
  }
  
  
  public function &getDate() {
    return $this->date;
  }
  
  
  public function setDate(&$date) {
    $this->date = $date;
  }
  
  
  public function &getTbSheduleidShedule() {
    return $this->tbSheduleidShedule;
  }
  
  
  public function setTbSheduleidShedule(&$tbSheduleidShedule) {
    $this->tbSheduleidShedule = $tbSheduleidShedule;
  }
  
  
  public function &getIdAssignation() {
    return $this->idAssignation;
  }
  
  
  public function setIdAssignation(&$idAssignation) {
    $this->idAssignation = $idAssignation;
  }
  
  
  public function getTbHistoryDetailAssignation() {
    return $this->tbHistoryDetailAssignation;
  }
  
  
  public function setTbHistoryDetailAssignation($tbHistoryDetailAssignation) {
    $this->tbHistoryDetailAssignation = $tbHistoryDetailAssignation;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idDetailAssignation;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idDetailAssignation' . '=' . $this->idDetailAssignation. ' ';
      if ($this->idAssignation instanceof epObject)  {
        $s .= 'idAssignation.Persist_ID=' . $this->idAssignation->toString(true). ' ';
      }
      else {
        $s .= 'idAssignation=null ';
      }
      
      $s .= 'date' . '=' . $this->date. ' ';
      if ($this->tbSheduleidShedule instanceof epObject)  {
        $s .= 'tbSheduleidShedule.Persist_ID=' . $this->tbSheduleidShedule->toString(true). ' ';
      }
      else {
        $s .= 'tbSheduleidShedule=null ';
      }
      
      $s .= 'count tbHistoryDetailAssignation'. '=' ;
      if($this->tbHistoryDetailAssignation) {
        $s .= $this->tbHistoryDetailAssignation->count() . ' ';
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
