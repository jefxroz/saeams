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
 * @orm TbHistoryCourse
 */
class TbHistoryCourse {
  public function deleteAndDissociate() {
    if($this->getIdPage() != null) {
      foreach($this->getIdPage()->tbHistoryCourse as $index => $obj) {
        if (($obj->idHistoryCourse == $this->idHistoryCourse)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdPage()->tbHistoryCourse[$index] = null;
        }
      }
    }
    if($this->getIdUser() != null) {
      foreach($this->getIdUser()->tbHistoryCourse as $index => $obj) {
        if (($obj->idHistoryCourse == $this->idHistoryCourse)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUser()->tbHistoryCourse[$index] = null;
        }
      }
    }
    if($this->getIdCourse1() != null) {
      foreach($this->getIdCourse1()->tbHistoryCourse1 as $index => $obj) {
        if (($obj->idHistoryCourse == $this->idHistoryCourse)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdCourse1()->tbHistoryCourse1[$index] = null;
        }
      }
    }
    if($this->getIdInstitution() != null) {
      foreach($this->getIdInstitution()->tbHistoryCourse as $index => $obj) {
        if (($obj->idHistoryCourse == $this->idHistoryCourse)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdInstitution()->tbHistoryCourse[$index] = null;
        }
      }
    }
    return true;
  }
  
  /**
   * @orm idHistoryCourse int
   * @dbva id(autogenerate) 
   */
  private $idHistoryCourse;
  
  /**
   * @orm Name char
   */
  private $name;
  
  /**
   * @orm Description char
   */
  private $description;
  
  /**
   * @orm Duration int
   */
  private $duration;
  
  /**
   * @orm State int
   */
  private $state;
  
  /**
   * @orm has one TbPage inverse(tbHistoryCourse)
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
   * @orm has one TbUser inverse(tbHistoryCourse)
   * @dbva fk(idUser) 
   */
  private $idUser;
  
  /**
   * @orm has one TbCourse inverse(tbHistoryCourse1)
   * @dbva fk(idCourse) 
   */
  private $idCourse1;
  
  /**
   * @orm has one TbInstitution inverse(tbHistoryCourse)
   * @dbva fk(idInstitution) 
   */
  private $idInstitution;
  
  public function &getIdHistoryCourse() {
    return $this->idHistoryCourse;
  }
  
  
  public function setIdHistoryCourse(&$idHistoryCourse) {
    $this->idHistoryCourse = $idHistoryCourse;
  }
  
  
  public function &getName() {
    return $this->name;
  }
  
  
  public function setName(&$name) {
    $this->name = $name;
  }
  
  
  public function &getDescription() {
    return $this->description;
  }
  
  
  public function setDescription(&$description) {
    $this->description = $description;
  }
  
  
  public function &getDuration() {
    return $this->duration;
  }
  
  
  public function setDuration(&$duration) {
    $this->duration = $duration;
  }
  
  
  public function &getState() {
    return $this->state;
  }
  
  
  public function setState(&$state) {
    $this->state = $state;
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
  
  
  public function &getIdCourse1() {
    return $this->idCourse1;
  }
  
  
  public function setIdCourse1(&$idCourse1) {
    $this->idCourse1 = $idCourse1;
  }
  
  
  public function &getIdInstitution() {
    return $this->idInstitution;
  }
  
  
  public function setIdInstitution(&$idInstitution) {
    $this->idInstitution = $idInstitution;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idHistoryCourse;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idHistoryCourse' . '=' . $this->idHistoryCourse. ' ';
      $s .= 'name' . '=' . $this->name. ' ';
      $s .= 'description' . '=' . $this->description. ' ';
      $s .= 'duration' . '=' . $this->duration. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
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
      
      if ($this->idCourse1 instanceof epObject)  {
        $s .= 'idCourse1.Persist_ID=' . $this->idCourse1->toString(true). ' ';
      }
      else {
        $s .= 'idCourse1=null ';
      }
      
      if ($this->idInstitution instanceof epObject)  {
        $s .= 'idInstitution.Persist_ID=' . $this->idInstitution->toString(true). ' ';
      }
      else {
        $s .= 'idInstitution=null ';
      }
      
      $s .= ']';
    }
    
    return $s;
  }
  
}

?>
