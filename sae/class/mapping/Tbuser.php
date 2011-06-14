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
 * @orm TbUser
 */
class TbUser {
  public function deleteAndDissociate() {
    if($this->getIdTypeTrainer() != null) {
      foreach($this->getIdTypeTrainer()->tbUser as $index => $obj) {
        if (($obj->idUser == $this->idUser)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdTypeTrainer()->tbUser[$index] = null;
        }
      }
    }
    foreach($this->tbShedule as $lTbShedule) {
      $lTbShedule->setIdUser(null);
    }
    foreach($this->tbHistoryUser as $lTbHistoryUser) {
      $lTbHistoryUser->setIdUser(null);
    }
    foreach($this->tbHistoryShedule as $lTbHistoryShedule) {
      $lTbHistoryShedule->setIdUserTrainer(null);
    }
    foreach($this->tbAssignation as $lTbAssignation) {
      $lTbAssignation->setIdUserStudent(null);
    }
    foreach($this->tbHistoryDetailAssignation as $lTbHistoryDetailAssignation) {
      $lTbHistoryDetailAssignation->setIdUser(null);
    }
    foreach($this->tbUserRol as $lTbUserRol) {
      $lTbUserRol->setTbUseridUser(null);
    }
    foreach($this->tbHistoryPrivilegeRol as $lTbHistoryPrivilegeRol) {
      $lTbHistoryPrivilegeRol->setIdUser(null);
    }
    foreach($this->tbHistoryUserRol as $lTbHistoryUserRol) {
      $lTbHistoryUserRol->setIdUserDeveloper(null);
    }
    foreach($this->tbHistoryAssignation as $lTbHistoryAssignation) {
      $lTbHistoryAssignation->setIdUser(null);
    }
    foreach($this->tbHistoryCourse as $lTbHistoryCourse) {
      $lTbHistoryCourse->setIdUser(null);
    }
    foreach($this->tbHistoryUser1 as $lTbHistoryUser1) {
      $lTbHistoryUser1->setIdUserDeveloper(null);
    }
    foreach($this->tbHistoryShedule1 as $lTbHistoryShedule1) {
      $lTbHistoryShedule1->setIdUserDeveloper(null);
    }
    foreach($this->tbHistoryAssignation1 as $lTbHistoryAssignation1) {
      $lTbHistoryAssignation1->setIdUserDeveloper(null);
    }
    return true;
  }
  
  /**
   * @orm idUser int
   * @dbva id(autogenerate) 
   */
  private $idUser;
  
  /**
   * @orm Mail char
   */
  private $mail;
  
  /**
   * @orm Password char
   */
  private $password;
  
  /**
   * @orm Id char
   */
  private $id;
  
  /**
   * @orm Name char
   */
  private $name;
  
  /**
   * @orm Address char
   */
  private $address;
  
  /**
   * @orm Gender int
   */
  private $gender;
  
  /**
   * @orm Birthdate datetime
   */
  private $birthdate;
  
  /**
   * @orm Carnet int
   */
  private $carnet;
  
  /**
   * @orm Unit int
   */
  private $unit;
  
  /**
   * @orm Extention int
   */
  private $extention;
  
  /**
   * @orm Career int
   */
  private $career;
  
  /**
   * @orm State int
   */
  private $state;
  
  /**
   * @orm has one TbTypeTrainer inverse(tbUser)
   * @dbva fk(idTypeTrainer) 
   */
  private $idTypeTrainer;
  
  /**
   * @orm has many TbShedule inverse(idUser)
   * @dbva inverse(idUser) 
   */
  private $tbShedule;
  
  /**
   * @orm has many TbHistoryUser inverse(idUser)
   * @dbva inverse(idUser) 
   */
  private $tbHistoryUser;
  
  /**
   * @orm has many TbHistoryShedule inverse(idUserTrainer)
   * @dbva inverse(idUserTrainer) 
   */
  private $tbHistoryShedule;
  
  /**
   * @orm has many TbAssignation inverse(idUserStudent)
   * @dbva inverse(idUserStudent) 
   */
  private $tbAssignation;
  
  /**
   * @orm has many TbHistoryDetailAssignation inverse(idUser)
   * @dbva inverse(idUser) 
   */
  private $tbHistoryDetailAssignation;
  
  /**
   * @orm has many TbUserRol inverse(tbUseridUser)
   * @dbva inverse(idUser) 
   */
  private $tbUserRol;
  
  /**
   * @orm has many TbHistoryPrivilegeRol inverse(idUser)
   * @dbva inverse(idUser) 
   */
  private $tbHistoryPrivilegeRol;
  
  /**
   * @orm has many TbHistoryUserRol inverse(idUserDeveloper)
   * @dbva inverse(idUserDeveloper) 
   */
  private $tbHistoryUserRol;
  
  /**
   * @orm has many TbHistoryAssignation inverse(idUser)
   * @dbva inverse(idUser) 
   */
  private $tbHistoryAssignation;
  
  /**
   * @orm has many TbHistoryCourse inverse(idUser)
   * @dbva inverse(idUser) 
   */
  private $tbHistoryCourse;
  
  /**
   * @orm has many TbHistoryUser inverse(idUserDeveloper)
   * @dbva inverse(idUserDeveloper) 
   */
  private $tbHistoryUser1;
  
  /**
   * @orm has many TbHistoryShedule inverse(idUserDeveloper)
   * @dbva inverse(idUserDeveloper) 
   */
  private $tbHistoryShedule1;
  
  /**
   * @orm has many TbHistoryAssignation inverse(idUserDeveloper)
   * @dbva inverse(idUserDeveloper) 
   */
  private $tbHistoryAssignation1;
  
  public function &getIdUser() {
    return $this->idUser;
  }
  
  
  public function setIdUser(&$idUser) {
    $this->idUser = $idUser;
  }
  
  
  public function &getName() {
    return $this->name;
  }
  
  
  public function setName(&$name) {
    $this->name = $name;
  }
  
  
  public function &getCarnet() {
    return $this->carnet;
  }
  
  
  public function setCarnet(&$carnet) {
    $this->carnet = $carnet;
  }
  
  
  public function &getMail() {
    return $this->mail;
  }
  
  
  public function setMail(&$mail) {
    $this->mail = $mail;
  }
  
  
  public function &getPassword() {
    return $this->password;
  }
  
  
  public function setPassword(&$password) {
    $this->password = $password;
  }
  
  
  public function &getGender() {
    return $this->gender;
  }
  
  
  public function setGender(&$gender) {
    $this->gender = $gender;
  }
  
  
  public function &getBirthdate() {
    return $this->birthdate;
  }
  
  
  public function setBirthdate(&$birthdate) {
    $this->birthdate = $birthdate;
  }
  
  
  public function &getUnit() {
    return $this->unit;
  }
  
  
  public function setUnit(&$unit) {
    $this->unit = $unit;
  }
  
  
  public function &getId() {
    return $this->id;
  }
  
  
  public function setId(&$id) {
    $this->id = $id;
  }
  
  
  public function &getExtention() {
    return $this->extention;
  }
  
  
  public function setExtention(&$extention) {
    $this->extention = $extention;
  }
  
  
  public function &getCareer() {
    return $this->career;
  }
  
  
  public function setCareer(&$career) {
    $this->career = $career;
  }
  
  
  public function &getAddress() {
    return $this->address;
  }
  
  
  public function setAddress(&$address) {
    $this->address = $address;
  }
  
  
  public function &getState() {
    return $this->state;
  }
  
  
  public function setState(&$state) {
    $this->state = $state;
  }
  
  
  public function &getIdTypeTrainer() {
    return $this->idTypeTrainer;
  }
  
  
  public function setIdTypeTrainer(&$idTypeTrainer) {
    $this->idTypeTrainer = $idTypeTrainer;
  }
  
  
  public function getTbShedule() {
    return $this->tbShedule;
  }
  
  
  public function setTbShedule($tbShedule) {
    $this->tbShedule = $tbShedule;
  }
  
  
  public function getTbHistoryUser() {
    return $this->tbHistoryUser;
  }
  
  
  public function setTbHistoryUser($tbHistoryUser) {
    $this->tbHistoryUser = $tbHistoryUser;
  }
  
  
  public function getTbHistoryShedule() {
    return $this->tbHistoryShedule;
  }
  
  
  public function setTbHistoryShedule($tbHistoryShedule) {
    $this->tbHistoryShedule = $tbHistoryShedule;
  }
  
  
  public function getTbAssignation() {
    return $this->tbAssignation;
  }
  
  
  public function setTbAssignation($tbAssignation) {
    $this->tbAssignation = $tbAssignation;
  }
  
  
  public function getTbHistoryDetailAssignation() {
    return $this->tbHistoryDetailAssignation;
  }
  
  
  public function setTbHistoryDetailAssignation($tbHistoryDetailAssignation) {
    $this->tbHistoryDetailAssignation = $tbHistoryDetailAssignation;
  }
  
  
  public function getTbUserRol() {
    return $this->tbUserRol;
  }
  
  
  public function setTbUserRol($tbUserRol) {
    $this->tbUserRol = $tbUserRol;
  }
  
  
  public function getTbHistoryPrivilegeRol() {
    return $this->tbHistoryPrivilegeRol;
  }
  
  
  public function setTbHistoryPrivilegeRol($tbHistoryPrivilegeRol) {
    $this->tbHistoryPrivilegeRol = $tbHistoryPrivilegeRol;
  }
  
  
  public function getTbHistoryUserRol() {
    return $this->tbHistoryUserRol;
  }
  
  
  public function setTbHistoryUserRol($tbHistoryUserRol) {
    $this->tbHistoryUserRol = $tbHistoryUserRol;
  }
  
  
  public function getTbHistoryAssignation() {
    return $this->tbHistoryAssignation;
  }
  
  
  public function setTbHistoryAssignation($tbHistoryAssignation) {
    $this->tbHistoryAssignation = $tbHistoryAssignation;
  }
  
  
  public function getTbHistoryCourse() {
    return $this->tbHistoryCourse;
  }
  
  
  public function setTbHistoryCourse($tbHistoryCourse) {
    $this->tbHistoryCourse = $tbHistoryCourse;
  }
  
  
  public function getTbHistoryUser1() {
    return $this->tbHistoryUser1;
  }
  
  
  public function setTbHistoryUser1($tbHistoryUser1) {
    $this->tbHistoryUser1 = $tbHistoryUser1;
  }
  
  
  public function getTbHistoryShedule1() {
    return $this->tbHistoryShedule1;
  }
  
  
  public function setTbHistoryShedule1($tbHistoryShedule1) {
    $this->tbHistoryShedule1 = $tbHistoryShedule1;
  }
  
  
  public function getTbHistoryAssignation1() {
    return $this->tbHistoryAssignation1;
  }
  
  
  public function setTbHistoryAssignation1($tbHistoryAssignation1) {
    $this->tbHistoryAssignation1 = $tbHistoryAssignation1;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idUser;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idUser' . '=' . $this->idUser. ' ';
      $s .= 'mail' . '=' . $this->mail. ' ';
      $s .= 'password' . '=' . $this->password. ' ';
      $s .= 'id' . '=' . $this->id. ' ';
      $s .= 'name' . '=' . $this->name. ' ';
      $s .= 'address' . '=' . $this->address. ' ';
      $s .= 'gender' . '=' . $this->gender. ' ';
      $s .= 'birthdate' . '=' . $this->birthdate. ' ';
      $s .= 'carnet' . '=' . $this->carnet. ' ';
      $s .= 'unit' . '=' . $this->unit. ' ';
      $s .= 'extention' . '=' . $this->extention. ' ';
      $s .= 'career' . '=' . $this->career. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
      if ($this->idTypeTrainer instanceof epObject)  {
        $s .= 'idTypeTrainer.Persist_ID=' . $this->idTypeTrainer->toString(true). ' ';
      }
      else {
        $s .= 'idTypeTrainer=null ';
      }
      
      $s .= 'count tbShedule'. '=' ;
      if($this->tbShedule) {
        $s .= $this->tbShedule->count() . ' ';
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
      
      $s .= 'count tbHistoryShedule'. '=' ;
      if($this->tbHistoryShedule) {
        $s .= $this->tbHistoryShedule->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbAssignation'. '=' ;
      if($this->tbAssignation) {
        $s .= $this->tbAssignation->count() . ' ';
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
      
      $s .= 'count tbUserRol'. '=' ;
      if($this->tbUserRol) {
        $s .= $this->tbUserRol->count() . ' ';
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
      
      $s .= 'count tbHistoryUserRol'. '=' ;
      if($this->tbHistoryUserRol) {
        $s .= $this->tbHistoryUserRol->count() . ' ';
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
      
      $s .= 'count tbHistoryCourse'. '=' ;
      if($this->tbHistoryCourse) {
        $s .= $this->tbHistoryCourse->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryUser1'. '=' ;
      if($this->tbHistoryUser1) {
        $s .= $this->tbHistoryUser1->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryShedule1'. '=' ;
      if($this->tbHistoryShedule1) {
        $s .= $this->tbHistoryShedule1->count() . ' ';
      }
      else {
        $s .= 0;
      }
      
      $s .= 'count tbHistoryAssignation1'. '=' ;
      if($this->tbHistoryAssignation1) {
        $s .= $this->tbHistoryAssignation1->count() . ' ';
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
