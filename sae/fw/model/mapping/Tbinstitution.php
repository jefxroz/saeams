<?php

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
  public function getList()
  {
  	return array('code'=>$this->idinstitution,'name'=>$this->name);
  }
    
}

?>
