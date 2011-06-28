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
 * @orm TbInstitution
 */
class TbInstitution {
  public function deleteAndDissociate() {
    foreach($this->tbCourse as $lTbCourse) {
      $lTbCourse->setIdInstitution(null);
    }
    foreach($this->tbHistoryInstitucion as $lTbHistoryInstitucion) {
      $lTbHistoryInstitucion->setIdInstitution(null);
    }
    foreach($this->tbHistoryCourse as $lTbHistoryCourse) {
      $lTbHistoryCourse->setIdInstitution(null);
    }
    return true;
  }
  
  /**
   * @orm idInstitution int
   * @dbva id(autogenerate) 
   */
  private $idInstitution;
  
  /**
   * @orm Name char
   */
  private $name;
  
  /**
   * @orm State int
   */
  private $state;
  
  /**
   * @orm has many TbCourse inverse(idInstitution)
   * @dbva inverse(idInstitution) 
   */
  private $tbCourse;
  
  /**
   * @orm has many TbHistoryInstitucion inverse(idInstitution)
   * @dbva inverse(idInstitution) 
   */
  private $tbHistoryInstitucion;
  
  /**
   * @orm has many TbHistoryCourse inverse(idInstitution)
   * @dbva inverse(idInstitution) 
   */
  private $tbHistoryCourse;
  
  public function &getIdInstitution() {
    return $this->idInstitution;
  }
  
  
  public function setIdInstitution(&$idInstitution) {
    $this->idInstitution = $idInstitution;
  }
  
  
  public function &getName() {
    return $this->name;
  }
  
  
  public function setName(&$name) {
    $this->name = $name;
  }
  
  
  public function &getState() {
    return $this->state;
  }
  
  
  public function setState(&$state) {
    $this->state = $state;
  }
  
  
  public function getTbCourse() {
    return $this->tbCourse;
  }
  
  
  public function setTbCourse($tbCourse) {
    $this->tbCourse = $tbCourse;
  }
  
  
  public function getTbHistoryInstitucion() {
    return $this->tbHistoryInstitucion;
  }
  
  
  public function setTbHistoryInstitucion($tbHistoryInstitucion) {
    $this->tbHistoryInstitucion = $tbHistoryInstitucion;
  }
  
  
  public function getTbHistoryCourse() {
    return $this->tbHistoryCourse;
  }
  
  
  public function setTbHistoryCourse($tbHistoryCourse) {
    $this->tbHistoryCourse = $tbHistoryCourse;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idInstitution;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idInstitution' . '=' . $this->idInstitution. ' ';
      $s .= 'name' . '=' . $this->name. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
      $s .= 'count tbCourse'. '=' ;
      if($this->tbCourse) {
        $s .= $this->tbCourse->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryInstitucion'. '=' ;
      if($this->tbHistoryInstitucion) {
        $s .= $this->tbHistoryInstitucion->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryCourse'. '=' ;
      if($this->tbHistoryCourse) {
        $s .= $this->tbHistoryCourse->count() . ' ';
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
