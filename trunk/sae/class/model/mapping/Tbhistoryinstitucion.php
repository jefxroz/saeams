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
 * @orm TbHistoryInstitucion
 */
class TbHistoryInstitucion {
  public function deleteAndDissociate() {
    if($this->getIdInstitution() != null) {
      foreach($this->getIdInstitution()->tbHistoryInstitucion as $index => $obj) {
        if (($obj->idHistoryInstitution == $this->idHistoryInstitution)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdInstitution()->tbHistoryInstitucion[$index] = null;
        }
      }
    }
    return true;
  }
  
  /**
   * @orm idHistoryInstitution int
   * @dbva id(autogenerate) 
   */
  private $idHistoryInstitution;
  
  /**
   * @orm has one TbInstitution inverse(tbHistoryInstitucion)
   * @dbva fk(idInstitution) 
   */
  private $idInstitution;
  
  /**
   * @orm Name char
   */
  private $name;
  
  /**
   * @orm Historydate datetime
   */
  private $historydate;
  
  /**
   * @orm Operation char
   */
  private $operation;
  
  /**
   * @orm State int
   */
  private $state;
  
  public function &getIdHistoryInstitution() {
    return $this->idHistoryInstitution;
  }
  
  
  public function setIdHistoryInstitution(&$idHistoryInstitution) {
    $this->idHistoryInstitution = $idHistoryInstitution;
  }
  
  
  public function &getName() {
    return $this->name;
  }
  
  
  public function setName(&$name) {
    $this->name = $name;
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
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idHistoryInstitution;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idHistoryInstitution' . '=' . $this->idHistoryInstitution. ' ';
      if ($this->idInstitution instanceof epObject)  {
        $s .= 'idInstitution.Persist_ID=' . $this->idInstitution->toString(true). ' ';
      }
      else {
        $s .= 'idInstitution=null ';
      }
      
      $s .= 'name' . '=' . $this->name. ' ';
      $s .= 'historydate' . '=' . $this->historydate. ' ';
      $s .= 'operation' . '=' . $this->operation. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
      $s .= ']';
    }
    
    return $s;
  }
  
}

?>
