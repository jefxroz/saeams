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
 * @orm TbPage
 */
class TbPage {
  public function deleteAndDissociate() {
    foreach($this->tbHistoryPage as $lTbHistoryPage) {
      $lTbHistoryPage->setIdPage(null);
    }
    foreach($this->tbHistoryShedule as $lTbHistoryShedule) {
      $lTbHistoryShedule->setIdPage(null);
    }
    foreach($this->tbHistoryAssignation as $lTbHistoryAssignation) {
      $lTbHistoryAssignation->setIdPage(null);
    }
    foreach($this->tbHistoryUser as $lTbHistoryUser) {
      $lTbHistoryUser->setIdPage(null);
    }
    foreach($this->tbHistoryCourse as $lTbHistoryCourse) {
      $lTbHistoryCourse->setIdPage(null);
    }
    foreach($this->tbHistoryPrivilegeRol as $lTbHistoryPrivilegeRol) {
      $lTbHistoryPrivilegeRol->setIdPage(null);
    }
    foreach($this->tbHistoryDetailAssignation as $lTbHistoryDetailAssignation) {
      $lTbHistoryDetailAssignation->setIdPage(null);
    }
    foreach($this->tbHistoryUserRol as $lTbHistoryUserRol) {
      $lTbHistoryUserRol->setIdPage(null);
    }
    return true;
  }
  
  /**
   * @orm idPage int
   * @dbva id(autogenerate) 
   */
  private $idPage;
  
  /**
   * @orm Name char
   */
  private $name;
  
  /**
   * @orm Version char
   */
  private $version;
  
  /**
   * @orm has many TbHistoryPage inverse(idPage)
   * @dbva inverse(idPage) 
   */
  private $tbHistoryPage;
  
  /**
   * @orm has many TbHistoryShedule inverse(idPage)
   * @dbva inverse(idPage) 
   */
  private $tbHistoryShedule;
  
  /**
   * @orm has many TbHistoryAssignation inverse(idPage)
   * @dbva inverse(idPage) 
   */
  private $tbHistoryAssignation;
  
  /**
   * @orm has many TbHistoryUser inverse(idPage)
   * @dbva inverse(idPage) 
   */
  private $tbHistoryUser;
  
  /**
   * @orm has many TbHistoryCourse inverse(idPage)
   * @dbva inverse(idPage) 
   */
  private $tbHistoryCourse;
  
  /**
   * @orm has many TbHistoryPrivilegeRol inverse(idPage)
   * @dbva inverse(idPage) 
   */
  private $tbHistoryPrivilegeRol;
  
  /**
   * @orm has many TbHistoryDetailAssignation inverse(idPage)
   * @dbva inverse(idPage) 
   */
  private $tbHistoryDetailAssignation;
  
  /**
   * @orm has many TbHistoryUserRol inverse(idPage)
   * @dbva inverse(idPage) 
   */
  private $tbHistoryUserRol;
  
  public function &getIdPage() {
    return $this->idPage;
  }
  
  
  public function setIdPage(&$idPage) {
    $this->idPage = $idPage;
  }
  
  
  public function &getName() {
    return $this->name;
  }
  
  
  public function setName(&$name) {
    $this->name = $name;
  }
  
  
  public function &getVersion() {
    return $this->version;
  }
  
  
  public function setVersion(&$version) {
    $this->version = $version;
  }
  
  
  public function getTbHistoryPage() {
    return $this->tbHistoryPage;
  }
  
  
  public function setTbHistoryPage($tbHistoryPage) {
    $this->tbHistoryPage = $tbHistoryPage;
  }
  
  
  public function getTbHistoryShedule() {
    return $this->tbHistoryShedule;
  }
  
  
  public function setTbHistoryShedule($tbHistoryShedule) {
    $this->tbHistoryShedule = $tbHistoryShedule;
  }
  
  
  public function getTbHistoryAssignation() {
    return $this->tbHistoryAssignation;
  }
  
  
  public function setTbHistoryAssignation($tbHistoryAssignation) {
    $this->tbHistoryAssignation = $tbHistoryAssignation;
  }
  
  
  public function getTbHistoryUser() {
    return $this->tbHistoryUser;
  }
  
  
  public function setTbHistoryUser($tbHistoryUser) {
    $this->tbHistoryUser = $tbHistoryUser;
  }
  
  
  public function getTbHistoryCourse() {
    return $this->tbHistoryCourse;
  }
  
  
  public function setTbHistoryCourse($tbHistoryCourse) {
    $this->tbHistoryCourse = $tbHistoryCourse;
  }
  
  
  public function getTbHistoryPrivilegeRol() {
    return $this->tbHistoryPrivilegeRol;
  }
  
  
  public function setTbHistoryPrivilegeRol($tbHistoryPrivilegeRol) {
    $this->tbHistoryPrivilegeRol = $tbHistoryPrivilegeRol;
  }
  
  
  public function getTbHistoryDetailAssignation() {
    return $this->tbHistoryDetailAssignation;
  }
  
  
  public function setTbHistoryDetailAssignation($tbHistoryDetailAssignation) {
    $this->tbHistoryDetailAssignation = $tbHistoryDetailAssignation;
  }
  
  
  public function getTbHistoryUserRol() {
    return $this->tbHistoryUserRol;
  }
  
  
  public function setTbHistoryUserRol($tbHistoryUserRol) {
    $this->tbHistoryUserRol = $tbHistoryUserRol;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idPage;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idPage' . '=' . $this->idPage. ' ';
      $s .= 'name' . '=' . $this->name. ' ';
      $s .= 'version' . '=' . $this->version. ' ';
      $s .= 'count tbHistoryPage'. '=' ;
      if($this->tbHistoryPage) {
        $s .= $this->tbHistoryPage->count() . ' ';
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
      
      $s .= 'count tbHistoryAssignation'. '=' ;
      if($this->tbHistoryAssignation) {
        $s .= $this->tbHistoryAssignation->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryUser'. '=' ;
      if($this->tbHistoryUser) {
        $s .= $this->tbHistoryUser->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryCourse'. '=' ;
      if($this->tbHistoryCourse) {
        $s .= $this->tbHistoryCourse->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryPrivilegeRol'. '=' ;
      if($this->tbHistoryPrivilegeRol) {
        $s .= $this->tbHistoryPrivilegeRol->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryDetailAssignation'. '=' ;
      if($this->tbHistoryDetailAssignation) {
        $s .= $this->tbHistoryDetailAssignation->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryUserRol'. '=' ;
      if($this->tbHistoryUserRol) {
        $s .= $this->tbHistoryUserRol->count() . ' ';
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
