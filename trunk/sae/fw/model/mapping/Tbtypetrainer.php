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
 * @orm TbTypeTrainer
 */
class TbTypeTrainer {
  public function deleteAndDissociate() {
    foreach($this->tbUser as $lTbUser) {
      $lTbUser->setIdTypeTrainer(null);
    }
    return true;
  }
  
  /**
   * @orm idTypeTrainer int
   * @dbva id(autogenerate) 
   */
  private $idTypeTrainer;
  
  /**
   * @orm Name char
   */
  private $name;
  
  /**
   * @orm State int
   */
  private $state;
  
  /**
   * @orm has many TbUser inverse(idTypeTrainer)
   * @dbva inverse(idTypeTrainer) 
   */
  private $tbUser;
  
  public function &getIdTypeTrainer() {
    return $this->idTypeTrainer;
  }
  
  
  public function setIdTypeTrainer(&$idTypeTrainer) {
    $this->idTypeTrainer = $idTypeTrainer;
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
  
  
  public function getTbUser() {
    return $this->tbUser;
  }
  
  
  public function setTbUser($tbUser) {
    $this->tbUser = $tbUser;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idTypeTrainer;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idTypeTrainer' . '=' . $this->idTypeTrainer. ' ';
      $s .= 'name' . '=' . $this->name. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
      $s .= 'count tbUser'. '=' ;
      if($this->tbUser) {
        $s .= $this->tbUser->count() . ' ';
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
