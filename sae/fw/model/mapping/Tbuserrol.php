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
 * @orm TbUserRol
 */
class TbUserRol {
  public function deleteAndDissociate() {
    if($this->getTbRolidRol() != null) {
      foreach($this->getTbRolidRol()->tbUserRol as $index => $obj) {
        if (($obj->tbRolidRol == $this->tbRolidRol) && ($obj->tbUseridUser == $this->tbUseridUser)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getTbRolidRol()->tbUserRol[$index] = null;
        }
      }
    }
    if($this->getTbUseridUser() != null) {
      foreach($this->getTbUseridUser()->tbUserRol as $index => $obj) {
        if (($obj->tbRolidRol == $this->tbRolidRol) && ($obj->tbUseridUser == $this->tbUseridUser)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getTbUseridUser()->tbUserRol[$index] = null;
        }
      }
    }
    foreach($this->tbHistoryUserRol as $lTbHistoryUserRol) {
      $lTbHistoryUserRol->setIdUser(null);
    }
    return true;
  }
  
  /**
   * @orm has one TbRol inverse(tbUserRol)
   * @dbva id fk(idRol) 
   */
  private $tbRolidRol;
  
  /**
   * @orm has one TbUser inverse(tbUserRol)
   * @dbva id fk(idUser) 
   */
  private $tbUseridUser;
  
  /**
   * @orm has many TbHistoryUserRol inverse(idUser)
   * @dbva inverse(IdUser,idRol) 
   */
  private $tbHistoryUserRol;
  
  public function &getTbRolidRol() {
    return $this->tbRolidRol;
  }
  
  
  public function setTbRolidRol(&$tbRolidRol) {
    $this->tbRolidRol = $tbRolidRol;
  }
  
  
  public function &getTbUseridUser() {
    return $this->tbUseridUser;
  }
  
  
  public function setTbUseridUser(&$tbUseridUser) {
    $this->tbUseridUser = $tbUseridUser;
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
      $s .= $this->tbRolidRol . ' ' . $this->tbUseridUser;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      if ($this->tbRolidRol instanceof epObject)  {
        $s .= 'tbRolidRol.Persist_ID=' . $this->tbRolidRol->toString(true). ' ';
      }
      else {
        $s .= 'tbRolidRol=null ';
      }
      
      if ($this->tbUseridUser instanceof epObject)  {
        $s .= 'tbUseridUser.Persist_ID=' . $this->tbUseridUser->toString(true). ' ';
      }
      else {
        $s .= 'tbUseridUser=null ';
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
