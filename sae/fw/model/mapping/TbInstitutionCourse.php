<?php
  class TbInstitutionCourse {

  private $idinstitution;
  
  private $idcourse;
  
  private $institutionname;
  
  private $section;
  
  private $cupo;
  
  private $periodo;
  
  private $anio;
  
  private $state;
  
  public function TbInstitutionCourse($idcourse,$idinstitution,$institutionname,$section,$cupo,$periodo,$anio)
  {
  	$this->idcourse=$idcourse;
  	$this->idinstitution=$idinstitution;
  	$this->institutionname=$institutionname;
  	$this->section=$section;
  	$this->cupo=$cupo;
  	$this->periodo=$periodo;
  	$this->anio=$anio;
  	
  }
  
  public function &getIdCourse(){
  	return $this->idcourse;
  }
  
  public function setIdCourse(&$idCourse){
  	$this->idcourse = $idCourse;
  }
  
  public function &getIdInstitution() {
    return $this->idinstitution;
  }
  
  public function setIdInstitution(&$idInstitution) {
    $this->idinstitution = $idinstitution;
  }
  
  public function &getInstitutionName() {
    return $this->institutionname;
  }
  
  public function setInstitutionName(&$name) {
    $this->institutionname = $name;
  }
  
  public function &getSection(){
  	return $this->section;
  }
  
  public function setSection($section){
  	$this->section = $section;
  }
  
  public function &getCupo(){
  	return $this->cupo;
  }
  
  public function setCupo($cupo){
  	$this->cupo = $cupo;
  }
  
  public function &getPeriodo(){
  	return $this->periodo;
  }
  
  public function setPeriodo($periodo){
  	$this->periodo = $periodo;
  }
  
  public function &getAnio(){
  	return $this->anio;
  }
  
  public function setAnio($anio){
  	$this->anio=$anio;
  }
  
  public function &getState() {
    return $this->state;
  }
  
  public function setState(&$state) {
    $this->state = $state;
  }
  
  public function getObjects()
  {
  	return array('idcourse'=>$this->idcourse,'idinstitution'=>$this->idinstitution,'institutionname'=>$this->institutionname);
  }  
  public function getList($state)
  {
  	return array('code'=>$this->idinstitution,'name'=>$this->institutionname,'section'=>$this->section,'cupo'=>$this->cupo,'periodo'=>$this->periodo,'anio'=>$this->anio,'state'=>$state);
  }
    
}
?>