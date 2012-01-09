<?php
  class TbSection {
  
  private $idcourse;
  
  private $name;
  
  private $section;
  
  private $catedratico;
  
  private $vigencia;
  
  public function TbSection($idcourse,$name,$section,$catedratico,$vigencia)
  {
  	$this->idcourse=$idcourse;
  	$this->name=$name;
  	$this->section=$section;
  	$this->catedratico=$catedratico;
  	$this->vigencia=$vigencia;
  }
  
  public function &getIdCourse(){
  	return $this->idcourse;
  }
  
  public function setIdCourse(&$idCourse){
  	$this->idcourse = $idCourse;
  }
  
  public function &getName() {
    return $this->name;
  }
  
  public function setName(&$name) {
    $this->name = $name;
  }
  
  public function &getSection(){
  	return $this->section;
  }
  
  public function setSection($section){
  	$this->section = $section;
  }
  
  public function &getCatedratico(){
  	return $this->catedratico;
  }
  
  public function setCatedratico($catedratico){
  	$this->catedratico = $catedratico;
  }
  
  public function getObjects()
  {
  	return array('idcourse'=>$this->idcourse,'name'=>$this->name,'section'=>$this->section,'catedratico'=>$this->catedratico,'vigencia'=>$this->vigencia);
  }  
  public function getList()
  {
  	return array('code'=>$this->idinstitution,'name'=>$this->institutionname,'section'=>$this->section,'cupo'=>$this->cupo,'periodo'=>$this->periodo,'anio'=>$this->anio,'state'=>$state);
  }
    
}
?>