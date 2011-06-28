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
 * @orm TbHistoryUserRol
 */
class TbHistoryUserRol {
  public function deleteAndDissociate() {
    if($this->getIdUser() != null) {
      foreach($this->getIdUser()->tbHistoryUserRol as $index => $obj) {
        if (($obj->idHistoryUserRol == $this->idHistoryUserRol)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUser()->tbHistoryUserRol[$index] = null;
        }
      }
    }
    if($this->getIdUserDeveloper() != null) {
      foreach($this->getIdUserDeveloper()->tbHistoryUserRol as $index => $obj) {
        if (($obj->idHistoryUserRol == $this->idHistoryUserRol)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdUserDeveloper()->tbHistoryUserRol[$index] = null;
        }
      }
    }
    if($this->getIdPage() != null) {
      foreach($this->getIdPage()->tbHistoryUserRol as $index => $obj) {
        if (($obj->idHistoryUserRol == $this->idHistoryUserRol)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdPage()->tbHistoryUserRol[$index] = null;
        }
      }
    }
    return true;
  }
  
  /**
   * @orm idHistoryUserRol int
   * @dbva id(autogenerate) 
   */
  private $idHistoryUserRol;
  
  /**
   * @orm has one TbUserRol inverse(tbHistoryUserRol)
   * @dbva fk(IdUser,idRol) 
   */
  private $idUser;
  
  /**
   * @orm has one TbUser inverse(tbHistoryUserRol)
   * @dbva fk(idUserDeveloper) 
   */
  private $idUserDeveloper;
  
  /**
   * @orm has one TbPage inverse(tbHistoryUserRol)
   * @dbva fk(idPage) 
   */
  private $idPage;
  
  /**
   * @orm Historydate datetime
   */
  private $historydate;
  
  /**
   * @orm Operation char
   */
  private $operation;
  
  public function &getHistorydate() {
    return $this->historydate;
  }
  
  
  public function setHistorydate(&$historydate) {
    $this->historydate = $historydate;
  }
  
  
  public function &getOperation() {
    return $this->operation;
  }
  
  
  public function setOperation(&$operation) {
    $this->operation = $operation;
  }
  
  
  public function &getIdHistoryUserRol() {
    return $this->idHistoryUserRol;
  }
  
  
  public function setIdHistoryUserRol(&$idHistoryUserRol) {
    $this->idHistoryUserRol = $idHistoryUserRol;
  }
  
  
  public function &getIdUser() {
    return $this->idUser;
  }
  
  
  public function setIdUser(&$idUser) {
    $this->idUser = $idUser;
  }
  
  
  public function &getIdUserDeveloper() {
    return $this->idUserDeveloper;
  }
  
  
  public function setIdUserDeveloper(&$idUserDeveloper) {
    $this->idUserDeveloper = $idUserDeveloper;
  }
  
  
  public function &getIdPage() {
    return $this->idPage;
  }
  
  
  public function setIdPage(&$idPage) {
    $this->idPage = $idPage;
  }
  
  
  public function __toString() {
    $s = '';
    $s .= $this->toString(false);
    return $s;
  }
  
  public function toString($idOnly) {
    $s = '';
    if($idOnly) {
      $s .= $this->idHistoryUserRol;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idHistoryUserRol' . '=' . $this->idHistoryUserRol. ' ';
      if ($this->idUser instanceof epObject)  {
        $s .= 'idUser.Persist_ID=' . $this->idUser->toString(true). ' ';
      }
      else {
        $s .= 'idUser=null ';
      }
      
      if ($this->idUserDeveloper instanceof epObject)  {
        $s .= 'idUserDeveloper.Persist_ID=' . $this->idUserDeveloper->toString(true). ' ';
      }
      else {
        $s .= 'idUserDeveloper=null ';
      }
      
      if ($this->idPage instanceof epObject)  {
        $s .= 'idPage.Persist_ID=' . $this->idPage->toString(true). ' ';
      }
      else {
        $s .= 'idPage=null ';
      }
      
      $s .= 'historydate' . '=' . $this->historydate. ' ';
      $s .= 'operation' . '=' . $this->operation. ' ';
      $s .= ']';
    }
    
    return $s;
  }
  
}

?>
