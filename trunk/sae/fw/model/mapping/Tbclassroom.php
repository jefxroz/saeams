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
 * @orm TbClassRoom
 */
class TbClassRoom {
  public function deleteAndDissociate() {
    foreach($this->tbShedule as $lTbShedule) {
      $lTbShedule->setIdClassRoom(null);
    }
    foreach($this->tbHistoryShedule as $lTbHistoryShedule) {
      $lTbHistoryShedule->setIdClassRoom(null);
    }
    return true;
  }
  
  /**
   * @orm idClassRoom int
   * @dbva id(autogenerate) 
   */
  private $idClassRoom;
  
  /**
   * @orm Name char
   */
  private $name;
  
  /**
   * @orm Address char
   */
  private $address;
  
  /**
   * @orm Quota decimal
   */
  private $quota;
  
  /**
   * @orm State int
   */
  private $state;
  
  /**
   * @orm has many TbShedule inverse(idClassRoom)
   * @dbva inverse(idClassRoom) 
   */
  private $tbShedule;
  
  /**
   * @orm has many TbHistoryShedule inverse(idClassRoom)
   * @dbva inverse(idClassRoom) 
   */
  private $tbHistoryShedule;
  
  public function &getIdClassRoom() {
    return $this->idClassRoom;
  }
  
  
  public function setIdClassRoom(&$idClassRoom) {
    $this->idClassRoom = $idClassRoom;
  }
  
  
  public function &getName() {
    return $this->name;
  }
  
  
  public function setName(&$name) {
    $this->name = $name;
  }
  
  
  public function &getAddress() {
    return $this->address;
  }
  
  
  public function setAddress(&$address) {
    $this->address = $address;
  }
  
  
  public function &getQuota() {
    return $this->quota;
  }
  
  
  public function setQuota(&$quota) {
    $this->quota = $quota;
  }
  
  
  public function &getState() {
    return $this->state;
  }
  
  
  public function setState(&$state) {
    $this->state = $state;
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
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idClassRoom;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idClassRoom' . '=' . $this->idClassRoom. ' ';
      $s .= 'name' . '=' . $this->name. ' ';
      $s .= 'address' . '=' . $this->address. ' ';
      $s .= 'quota' . '=' . $this->quota. ' ';
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
      
      $s .= ']';
    }
    
    return $s;
  }
  
}

?>
