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
 * @orm TbHistoryShedule
 */
class TbHistoryShedule {
  public function deleteAndDissociate() {
    if($this->getIdCourse() != null) {
      foreach($this->getIdCourse()->tbHistoryShedule as $index => $obj) {
        if (($obj->idHistoryShedule == $this->idHistoryShedule)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdCourse()->tbHistoryShedule[$index] = null;
        }
      }
    }
    if($this->getIdUserTrainer() != null) {
      foreach($this->getIdUserTrainer()->tbHistoryShedule as $index => $obj) {
        if (($obj->idHistoryShedule == $this->idHistoryShedule)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUserTrainer()->tbHistoryShedule[$index] = null;
        }
      }
    }
    if($this->getIdClassRoom() != null) {
      foreach($this->getIdClassRoom()->tbHistoryShedule as $index => $obj) {
        if (($obj->idHistoryShedule == $this->idHistoryShedule)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdClassRoom()->tbHistoryShedule[$index] = null;
        }
      }
    }
    if($this->getIdPage() != null) {
      foreach($this->getIdPage()->tbHistoryShedule as $index => $obj) {
        if (($obj->idHistoryShedule == $this->idHistoryShedule)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdPage()->tbHistoryShedule[$index] = null;
        }
      }
    }
    if($this->getIdShedule() != null) {
      foreach($this->getIdShedule()->tbHistoryShedule as $index => $obj) {
        if (($obj->idHistoryShedule == $this->idHistoryShedule)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdShedule()->tbHistoryShedule[$index] = null;
        }
      }
    }
    if($this->getIdUserDeveloper() != null) {
      foreach($this->getIdUserDeveloper()->tbHistoryShedule1 as $index => $obj) {
        if (($obj->idHistoryShedule == $this->idHistoryShedule)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUserDeveloper()->tbHistoryShedule1[$index] = null;
        }
      }
    }
    return true;
  }
  
  /**
   * @orm idHistoryShedule int
   * @dbva id(autogenerate) 
   */
  private $idHistoryShedule;
  
  /**
   * @orm has one TbCourse inverse(tbHistoryShedule)
   * @dbva fk(idCourse) 
   */
  private $idCourse;
  
  /**
   * @orm has one TbUser inverse(tbHistoryShedule)
   * @dbva fk(idUserTrainer) 
   */
  private $idUserTrainer;
  
  /**
   * @orm has one TbClassRoom inverse(tbHistoryShedule)
   * @dbva fk(idClassRoom) 
   */
  private $idClassRoom;
  
  /**
   * @orm Starttime time
   */
  private $starttime;
  
  /**
   * @orm Endtime time
   */
  private $endtime;
  
  /**
   * @orm Startdate datetime
   */
  private $startdate;
  
  /**
   * @orm Enddate datetime
   */
  private $enddate;
  
  /**
   * @orm State int
   */
  private $state;
  
  /**
   * @orm Price decimal
   */
  private $price;
  
  /**
   * @orm Operation char
   */
  private $operation;
  
  /**
   * @orm Historydate datetime
   */
  private $historydate;
  
  /**
   * @orm has one TbPage inverse(tbHistoryShedule)
   * @dbva fk(idPage) 
   */
  private $idPage;
  
  /**
   * @orm has one TbShedule inverse(tbHistoryShedule)
   * @dbva fk(idShedule) 
   */
  private $idShedule;
  
  /**
   * @orm has one TbUser inverse(tbHistoryShedule1)
   * @dbva fk(idUserDeveloper) 
   */
  private $idUserDeveloper;
  
  public function &getIdHistoryShedule() {
    return $this->idHistoryShedule;
  }
  
  
  public function setIdHistoryShedule(&$idHistoryShedule) {
    $this->idHistoryShedule = $idHistoryShedule;
  }
  
  
  public function &getStarttime() {
    return $this->starttime;
  }
  
  
  public function setStarttime(&$starttime) {
    $this->starttime = $starttime;
  }
  
  
  public function &getEndtime() {
    return $this->endtime;
  }
  
  
  public function setEndtime(&$endtime) {
    $this->endtime = $endtime;
  }
  
  
  public function &getStartdate() {
    return $this->startdate;
  }
  
  
  public function setStartdate(&$startdate) {
    $this->startdate = $startdate;
  }
  
  
  public function &getEnddate() {
    return $this->enddate;
  }
  
  
  public function setEnddate(&$enddate) {
    $this->enddate = $enddate;
  }
  
  
  public function &getState() {
    return $this->state;
  }
  
  
  public function setState(&$state) {
    $this->state = $state;
  }
  
  
  public function &getPrice() {
    return $this->price;
  }
  
  
  public function setPrice(&$price) {
    $this->price = $price;
  }
  
  
  public function &getOperation() {
    return $this->operation;
  }
  
  
  public function setOperation(&$operation) {
    $this->operation = $operation;
  }
  
  
  public function &getHistorydate() {
    return $this->historydate;
  }
  
  
  public function setHistorydate(&$historydate) {
    $this->historydate = $historydate;
  }
  
  
  public function &getIdCourse() {
    return $this->idCourse;
  }
  
  
  public function setIdCourse(&$idCourse) {
    $this->idCourse = $idCourse;
  }
  
  
  public function &getIdUserTrainer() {
    return $this->idUserTrainer;
  }
  
  
  public function setIdUserTrainer(&$idUserTrainer) {
    $this->idUserTrainer = $idUserTrainer;
  }
  
  
  public function &getIdClassRoom() {
    return $this->idClassRoom;
  }
  
  
  public function setIdClassRoom(&$idClassRoom) {
    $this->idClassRoom = $idClassRoom;
  }
  
  
  public function &getIdPage() {
    return $this->idPage;
  }
  
  
  public function setIdPage(&$idPage) {
    $this->idPage = $idPage;
  }
  
  
  public function &getIdShedule() {
    return $this->idShedule;
  }
  
  
  public function setIdShedule(&$idShedule) {
    $this->idShedule = $idShedule;
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
      $s .= $this->idHistoryShedule;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idHistoryShedule' . '=' . $this->idHistoryShedule. ' ';
      if ($this->idCourse instanceof epObject)  {
        $s .= 'idCourse.Persist_ID=' . $this->idCourse->toString(true). ' ';
      }
      else {
        $s .= 'idCourse=null ';
      }
      
      if ($this->idUserTrainer instanceof epObject)  {
        $s .= 'idUserTrainer.Persist_ID=' . $this->idUserTrainer->toString(true). ' ';
      }
      else {
        $s .= 'idUserTrainer=null ';
      }
      
      if ($this->idClassRoom instanceof epObject)  {
        $s .= 'idClassRoom.Persist_ID=' . $this->idClassRoom->toString(true). ' ';
      }
      else {
        $s .= 'idClassRoom=null ';
      }
      
      $s .= 'starttime' . '=' . $this->starttime. ' ';
      $s .= 'endtime' . '=' . $this->endtime. ' ';
      $s .= 'startdate' . '=' . $this->startdate. ' ';
      $s .= 'enddate' . '=' . $this->enddate. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
      $s .= 'price' . '=' . $this->price. ' ';
      $s .= 'operation' . '=' . $this->operation. ' ';
      $s .= 'historydate' . '=' . $this->historydate. ' ';
      if ($this->idPage instanceof epObject)  {
        $s .= 'idPage.Persist_ID=' . $this->idPage->toString(true). ' ';
      }
      else {
        $s .= 'idPage=null ';
      }
      
      if ($this->idShedule instanceof epObject)  {
        $s .= 'idShedule.Persist_ID=' . $this->idShedule->toString(true). ' ';
      }
      else {
        $s .= 'idShedule=null ';
      }
      
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
