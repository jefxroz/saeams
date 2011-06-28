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
 * @orm TbHistoryPage
 */
class TbHistoryPage {
  public function deleteAndDissociate() {
    if($this->getIdPage() != null) {
      foreach($this->getIdPage()->tbHistoryPage as $index => $obj) {
        if (($obj->idHistoryPage == $this->idHistoryPage)) {
          $indexes[] = $index;
        }
      }
      if($indexes) {
        foreach($indexes as $index) {
          $this->getIdPage()->tbHistoryPage[$index] = null;
        }
      }
    }
    return true;
  }
  
  /**
   * @orm idHistoryPage int
   * @dbva id(autogenerate) 
   */
  private $idHistoryPage;
  
  /**
   * @orm Name char
   */
  private $name;
  
  /**
   * @orm Version char
   */
  private $version;
  
  /**
   * @orm Iduserdeveloper char
   */
  private $iduserdeveloper;
  
  /**
   * @orm has one TbPage inverse(tbHistoryPage)
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
  
  public function &getIdHistoryPage() {
    return $this->idHistoryPage;
  }
  
  
  public function setIdHistoryPage(&$idHistoryPage) {
    $this->idHistoryPage = $idHistoryPage;
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
  
  
  public function &getIduserdeveloper() {
    return $this->iduserdeveloper;
  }
  
  
  public function setIduserdeveloper(&$iduserdeveloper) {
    $this->iduserdeveloper = $iduserdeveloper;
  }
  
  
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
      $s .= $this->idHistoryPage;
    }
    else {
      $s .= get_class($this);
      $s .= '[';
      $s .= 'idHistoryPage' . '=' . $this->idHistoryPage. ' ';
      $s .= 'name' . '=' . $this->name. ' ';
      $s .= 'version' . '=' . $this->version. ' ';
      $s .= 'iduserdeveloper' . '=' . $this->iduserdeveloper. ' ';
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
