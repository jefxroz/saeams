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

  private $idinstitution;
  
  private $name;
  
  private $state;
  
  public function TbInstitution($idinstitution,$name)
  {
  	$this->idinstitution=$idinstitution;
  	$this->name=$name;
  }
  
  public function &getIdInstitution() {
    return $this->idinstitution;
  }
  
  public function setIdInstitution(&$idInstitution) {
    $this->idinstitution = $idinstitution;
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
  
  public function getObjects()
  {
  	return array('id'=>$this->idinstitution,'text'=>$this->name);
  }  
    
}

?>
