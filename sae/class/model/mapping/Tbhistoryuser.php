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
 * @orm TbHistoryUser
 */
class TbHistoryUser {
  public function deleteAndDissociate() {
    if($this->getIdUser() != null) {
      foreach($this->getIdUser()->tbHistoryUser as $index => $obj) {
        if (($obj->idHistoryUser == $this->idHistoryUser)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUser()->tbHistoryUser[$index] = null;
        }
      }
    }
    if($this->getIdPage() != null) {
      foreach($this->getIdPage()->tbHistoryUser as $index => $obj) {
        if (($obj->idHistoryUser == $this->idHistoryUser)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdPage()->tbHistoryUser[$index] = null;
        }
      }
    }
    if($this->getIdUserDeveloper() != null) {
      foreach($this->getIdUserDeveloper()->tbHistoryUser1 as $index => $obj) {
        if (($obj->idHistoryUser == $this->idHistoryUser)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUserDeveloper()->tbHistoryUser1[$index] = null;
        }
      }
    }
    return true;
  }
  
  /**
   * @orm idHistoryUser int
   * @dbva id(autogenerate) 
   */
  private $idHistoryUser;
  
  /**
   * @orm has one TbUser inverse(tbHistoryUser)
   * @dbva fk(idUser) 
   */
  private $idUser;
  
  /**
   * @orm Name char
   */
  private $name;
  
  /**
   * @orm Carnet int
   */
  private $carnet;
  
  /**
   * @orm Id int
   */
  private $id;
  
  /**
   * @orm Mail char
   */
  private $mail;
  
  /**
   * @orm Password char
   */
  private $password;
  
  /**
   * @orm Gender int
   */
  private $gender;
  
  /**
   * @orm Birthdate datetime
   */
  private $birthdate;
  
  /**
   * @orm Unit int
   */
  private $unit;
  
  /**
   * @orm Extension int
   */
  private $extension;
  
  /**
   * @orm Career int
   */
  private $career;
  
  /**
   * @orm Address char
   */
  private $address;
  
  /**
   * @orm Operation char
   */
  private $operation;
  
  /**
   * @orm Historydate datetime
   */
  private $historydate;
  
  /**
   * @orm State int
   */
  private $state;
  
  /**
   * @orm has one TbPage inverse(tbHistoryUser)
   * @dbva fk(idPage) 
   */
  private $idPage;
  
  /**
   * @orm has one TbUser inverse(tbHistoryUser1)
   * @dbva fk(idUserDeveloper) 
   */
  private $idUserDeveloper;
  
  public function &getIdHistoryUser() {
    return $this->idHistoryUser;
  }
  
  
  public function setIdHistoryUser(&$idHistoryUser) {
    $this->idHistoryUser = $idHistoryUser;
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
  
  
  public function &getExtension() {
    return $this->extension;
  }
  
  
  public function setExtension(&$extension) {
    $this->extension = $extension;
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
  
  
  public function &getOperation() {
    return $this->operation;
  }
  
  
  public function setOperation(&$operation) {
    $this->operation = $operation;
  }
  
  
  public function &getHistorydate() {
    return $this->historydate;
  }
  
  
  public function setHistorydate(&$historydate) {
    $this->historydate = $historydate;
  }
  
  
  public function &getState() {
    return $this->state;
  }
  
  
  public function setState(&$state) {
    $this->state = $state;
  }
  
  
  public function &getId() {
    return $this->id;
  }
  
  
  public function setId(&$id) {
    $this->id = $id;
  }
  
  
  public function &getMail() {
    return $this->mail;
  }
  
  
  public function setMail(&$mail) {
    $this->mail = $mail;
  }
  
  
  public function &getIdUser() {
    return $this->idUser;
  }
  
  
  public function setIdUser(&$idUser) {
    $this->idUser = $idUser;
  }
  
  
  public function &getIdPage() {
    return $this->idPage;
  }
  
  
  public function setIdPage(&$idPage) {
    $this->idPage = $idPage;
  }
  
  
  public function &getIdUserDeveloper() {
    return $this->idUserDeveloper;
  }
  
  
  public function setIdUserDeveloper(&$idUserDeveloper) {
    $this->idUserDeveloper = $idUserDeveloper;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idHistoryUser;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idHistoryUser' . '=' . $this->idHistoryUser. ' ';
      if ($this->idUser instanceof epObject)  {
        $s .= 'idUser.Persist_ID=' . $this->idUser->toString(true). ' ';
      }
      else {
        $s .= 'idUser=null ';
      }
      
      $s .= 'name' . '=' . $this->name. ' ';
      $s .= 'carnet' . '=' . $this->carnet. ' ';
      $s .= 'id' . '=' . $this->id. ' ';
      $s .= 'mail' . '=' . $this->mail. ' ';
      $s .= 'password' . '=' . $this->password. ' ';
      $s .= 'gender' . '=' . $this->gender. ' ';
      $s .= 'birthdate' . '=' . $this->birthdate. ' ';
      $s .= 'unit' . '=' . $this->unit. ' ';
      $s .= 'extension' . '=' . $this->extension. ' ';
      $s .= 'career' . '=' . $this->career. ' ';
      $s .= 'address' . '=' . $this->address. ' ';
      $s .= 'operation' . '=' . $this->operation. ' ';
      $s .= 'historydate' . '=' . $this->historydate. ' ';
      $s .= 'state' . '=' . $this->state. ' ';
      if ($this->idPage instanceof epObject)  {
        $s .= 'idPage.Persist_ID=' . $this->idPage->toString(true). ' ';
      }
      else {
        $s .= 'idPage=null ';
      }
      
      if ($this->idUserDeveloper instanceof epObject)  {
        $s .= 'idUserDeveloper.Persist_ID=' . $this->idUserDeveloper->toString(true). ' ';
      }
      else {
        $s .= 'idUserDeveloper=null ';
      }
      
      $s .= ']';
    }
    
    return $s;
  }
  
}

?>
