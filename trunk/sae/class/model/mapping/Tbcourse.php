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
 * @orm TbCourse
 */
class TbCourse {
  public function deleteAndDissociate() {
    if($this->getIdInstitution() != null) {
      foreach($this->getIdInstitution()->tbCourse as $index => $obj) {
        if (($obj->idCourse == $this->idCourse)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdInstitution()->tbCourse[$index] = null;
        }
      }
    }
    foreach($this->tbShedule as $lTbShedule) {
      $lTbShedule->setIdCourse(null);
    }
    foreach($this->tbHistoryShedule as $lTbHistoryShedule) {
      $lTbHistoryShedule->setIdCourse(null);
    }
    foreach($this->tbHistoryCourse1 as $lTbHistoryCourse1) {
      $lTbHistoryCourse1->setIdCourse1(null);
    }
    return true;
  }
  
  /**
   * @orm idCourse int
   * @dbva id(autogenerate) 
   */
  private $idCourse;
  
  /**
   * @orm Name char
   */
  private $name;
  
  /**
   * @orm Description char
   */
  private $description;
  
  /**
   * @orm has one TbInstitution inverse(tbCourse)
   * @dbva fk(idInstitution) 
   */
  private $idInstitution;
  
  /**
   * @orm Duration int
   */
  private $duration;
  
  /**
   * @orm State int
   */
  private $state;
  
  /**
   * @orm has many TbShedule inverse(idCourse)
   * @dbva inverse(idCourse) 
   */
  private $tbShedule;
  
  /**
   * @orm has many TbHistoryShedule inverse(idCourse)
   * @dbva inverse(idCourse) 
   */
  private $tbHistoryShedule;
  
  /**
   * @orm has many TbHistoryCourse inverse(idCourse1)
   * @dbva inverse(idCourse) 
   */
  private $tbHistoryCourse1;
  
  public function &getIdCourse() {
    return $this->idCourse;
  }
  
  
  public function setIdCourse(&$idCourse) {
    $this->idCourse = $idCourse;
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
  
  
  public function &getIdInstitution() {
    return $this->idInstitution;
  }
  
  
  public function setIdInstitution(&$idInstitution) {
    $this->idInstitution = $idInstitution;
  }
  
  
  public function getTbShedule() {
    return $this->tbShedule;
  }
  
  
  public function setTbShedule($tbShedule) {
    $this->tbShedule = $tbShedule;
  }
  
  
  public function getTbHistoryShedule() {
    return $this->tbHistoryShedule;
  }
  
  
  public function setTbHistoryShedule($tbHistoryShedule) {
    $this->tbHistoryShedule = $tbHistoryShedule;
  }
  
  
  public function getTbHistoryCourse1() {
    return $this->tbHistoryCourse1;
  }
  
  
  public function setTbHistoryCourse1($tbHistoryCourse1) {
    $this->tbHistoryCourse1 = $tbHistoryCourse1;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idCourse;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idCourse' . '=' . $this->idCourse. ' ';
      $s .= 'name' . '=' . $this->name. ' ';
      $s .= 'description' . '=' . $this->description. ' ';
      if ($this->idInstitution instanceof epObject)  {
        $s .= 'idInstitution.Persist_ID=' . $this->idInstitution->toString(true). ' ';
      }
      else {
        $s .= 'idInstitution=null ';
      }
      
      $s .= 'duration' . '=' . $this->duration. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
      $s .= 'count tbShedule'. '=' ;
      if($this->tbShedule) {
        $s .= $this->tbShedule->count() . ' ';
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
      
      $s .= 'count tbHistoryCourse1'. '=' ;
      if($this->tbHistoryCourse1) {
        $s .= $this->tbHistoryCourse1->count() . ' ';
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
