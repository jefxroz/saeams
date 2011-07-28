<?php

class TbTypeSchool 
{
 
  private $idtypeschool;
  
  private $name;
  
  public function TbTypeSchool($idtypeschool,$name)
  {
  	$this->idtypeschool=$idtypeschool;
  	$this->name=$name;
  }
  
  public function &getIdTypeSchool() 
  {
    return $this->idtypeschool;
  }
   
  public function setIdTypeSchool(&$idtypeschool) 
  {	
    $this->idtypeschool = $idtypeschool;
  }
  
  public function &getName() 
  {
    return $this->name;
  }
  
  public function setName(&$name) 
  {
    $this->name = $name;
  }
  
  public function getObjects()
  {
  	return array('id'=>$this->idtypeschool,'text'=>$this->name);
  }  
   
}