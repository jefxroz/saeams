<?php

class TbState {

  private $idstate;
  
  private $name;
  
  
  public function TbState($idstate,$name)
  {
  	$this->idstate=$idstate;
  	$this->name=$name;
  }
  
  public function &getIdState() {
    return $this->idstate;
  }
  
  public function setIdState(&$idstate) {
    $this->idstate = $idstate;
  }
  
  public function &getName() {
    return $this->name;
  }
  
  public function setName(&$name) {
    $this->name = $name;
  }
  
  public function getObjects()
  {
  	return array('id'=>$this->idstate,'text'=>$this->name);
  }  
    
}

?>
