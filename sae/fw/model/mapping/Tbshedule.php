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
 * @orm TbShedule
 */
class TbShedule {
  public function deleteAndDissociate() {
    if($this->getIdCourse() != null) {
      foreach($this->getIdCourse()->tbShedule as $index => $obj) {
        if (($obj->idShedule == $this->idShedule)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdCourse()->tbShedule[$index] = null;
        }
      }
    }
    if($this->getIdUser() != null) {
      foreach($this->getIdUser()->tbShedule as $index => $obj) {
        if (($obj->idShedule == $this->idShedule)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUser()->tbShedule[$index] = null;
        }
      }
    }
    if($this->getIdClassRoom() != null) {
      foreach($this->getIdClassRoom()->tbShedule as $index => $obj) {
        if (($obj->idShedule == $this->idShedule)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdClassRoom()->tbShedule[$index] = null;
        }
      }
    }
    foreach($this->tbDetailAssignation as $lTbDetailAssignation) {
      $lTbDetailAssignation->setTbSheduleidShedule(null);
    }
    foreach($this->tbHistoryShedule as $lTbHistoryShedule) {
      $lTbHistoryShedule->setIdShedule(null);
    }
    return true;
  }
  
  /**
   * @orm idShedule int
   * @dbva id(autogenerate) 
   */
  private $idShedule;
  
  /**
   * @orm has one TbCourse inverse(tbShedule)
   * @dbva fk(idCourse) 
   */
  private $idCourse;
  
  /**
   * @orm has one TbUser inverse(tbShedule)
   * @dbva fk(idUser) 
   */
  private $idUser;
  
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
   * @orm has one TbClassRoom inverse(tbShedule)
   * @dbva fk(idClassRoom) 
   */
  private $idClassRoom;
  
  /**
   * @orm has many TbDetailAssignation inverse(tbSheduleidShedule)
   * @dbva inverse(idShedule) 
   */
  private $tbDetailAssignation;
  
  /**
   * @orm has many TbHistoryShedule inverse(idShedule)
   * @dbva inverse(idShedule) 
   */
  private $tbHistoryShedule;
  
  public function &getIdShedule() {
    return $this->idShedule;
  }
  
  
  public function setIdShedule(&$idShedule) {
    $this->idShedule = $idShedule;
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
  
  
  public function &getIdCourse() {
    return $this->idCourse;
  }
  
  
  public function setIdCourse(&$idCourse) {
    $this->idCourse = $idCourse;
  }
  
  
  public function &getIdUser() {
    return $this->idUser;
  }
  
  
  public function setIdUser(&$idUser) {
    $this->idUser = $idUser;
  }
  
  
  public function &getIdClassRoom() {
    return $this->idClassRoom;
  }
  
  
  public function setIdClassRoom(&$idClassRoom) {
    $this->idClassRoom = $idClassRoom;
  }
  
  
  public function getTbDetailAssignation() {
    return $this->tbDetailAssignation;
  }
  
  
  public function setTbDetailAssignation($tbDetailAssignation) {
    $this->tbDetailAssignation = $tbDetailAssignation;
  }
  
  
  public function getTbHistoryShedule() {
    return $this->tbHistoryShedule;
  }
  
  
  public function setTbHistoryShedule($tbHistoryShedule) {
    $this->tbHistoryShedule = $tbHistoryShedule;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idShedule;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idShedule' . '=' . $this->idShedule. ' ';
      if ($this->idCourse instanceof epObject)  {
        $s .= 'idCourse.Persist_ID=' . $this->idCourse->toString(true). ' ';
      }
      else {
        $s .= 'idCourse=null ';
      }
      
      if ($this->idUser instanceof epObject)  {
        $s .= 'idUser.Persist_ID=' . $this->idUser->toString(true). ' ';
      }
      else {
        $s .= 'idUser=null ';
      }
      
      $s .= 'starttime' . '=' . $this->starttime. ' ';
      $s .= 'endtime' . '=' . $this->endtime. ' ';
      $s .= 'startdate' . '=' . $this->startdate. ' ';
      $s .= 'enddate' . '=' . $this->enddate. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
      $s .= 'price' . '=' . $this->price. ' ';
      if ($this->idClassRoom instanceof epObject)  {
        $s .= 'idClassRoom.Persist_ID=' . $this->idClassRoom->toString(true). ' ';
      }
      else {
        $s .= 'idClassRoom=null ';
      }
      
      $s .= 'count tbDetailAssignation'. '=' ;
      if($this->tbDetailAssignation) {
        $s .= $this->tbDetailAssignation->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryShedule'. '=' ;
      if($this->tbHistoryShedule) {
        $s .= $this->tbHistoryShedule->count() . ' ';
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
