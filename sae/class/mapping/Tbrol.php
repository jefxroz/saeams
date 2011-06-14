<?php



class TbRol {
 
  private $idRol;
  
  private $name;
  
  public function &getIdRol() {
    return $this->idRol;
  }
   
  public function setIdRol(&$idRol) {
    $this->idRol = $idRol;
  }
  
  public function &getName() {
    return $this->name;
  }
  
  public function setName(&$name) {
    $this->name = $name;
  }
      
}

?>
