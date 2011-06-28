<?php

class TbUser {
  
	private $idUser;
  
  	private $mail;
  
  	private $password;
  
  	private $id;
  
  	private $name;
  	
  	private $surname;
  
  	private $address;
  
  	private $gender;

  	private $idtypeschool;
  	
  	private $birthdate;
  
  	private $phone;
  	
  	private $celular;
  	
  	private $carnet;
  
  	private $unity;
  
  	private $extention;
  
  	private $career;
  
 	private $state;
  
  	private $idtypetrainer;
  	
  	private $activatelink;
  
	public function TbUser($mail,$password,$id,$name,$surname,$address,$gender,$idtypeschool,$birthdate,$phone,$celular,$carnet,$unity,$extention,$career,$state,$idtypetrainer,$activatelink)
	{
		$this->mail=$mail;
		$this->password=$password;
		$this->id=$id;
		$this->name=$name;
		$this->surname=$surname;
		$this->address=$address;
		$this->gender=$gender;
		$this->idtypeschool=$idtypeschool;
		$this->birthdate=$birthdate;
		$this->phone=$phone;
		$this->celular=$celular;
		$this->carnet=$carnet;
		$this->unity=$unity;
		$this->extention=$extention;
		$this->career=$career;
		$this->state=$state;
		$this->idtypetrainer=$idtypetrainer;
		$this->activatelink=$activatelink;
	} 
  	public function &getIdUser() 
  	{
    	return $this->idUser;
  	}
  
  	public function setIdUser(&$idUser) 
  	{
    	$this->idUser = $idUser;
  	}
    
  	public function &getName() 
  	{
    	return $this->name;
  	}

  	public function setName(&$name) 
  	{
    	$this->surname = $surname;
  	}
  	
  	public function &getSurName() 
  	{
    	return $this->surname;
  	}

  	public function setSurName(&$name) 
  	{
    	$this->name = $name;
  	}
  
  	public function &getCarnet() 
  	{
    	return $this->carnet;
  	}
  
 	public function setCarnet(&$carnet) 
 	{
    	$this->carnet = $carnet;
  	}
  
  	public function &getMail() 
  	{
    	return $this->mail;
  	}
  
  	public function setMail(&$mail) 
  	{
    	$this->mail = $mail;
  	}
  
  
  	public function &getPassword() 
  	{
    	return $this->password;
  	}
 	
  	public function setPassword(&$password) {
    	$this->password = $password;
  	}
  
  	public function &getGender() 
  	{
    	return $this->gender;
  	}
  
  	public function setGender(&$gender) 
  	{
    	$this->gender = $gender;
  	}
  	
  	public function &getBirthdate() 
  	{
    	return $this->birthdate;
  	}
  	  	
  	public function setBirthdate(&$birthdate) 
  	{
    	$this->birthdate = $birthdate;
  	}
  	
	public function &getPhone() 
  	{
    	return $this->phone;
  	}
  
  	public function setPhone(&$phone) 
  	{
    	$this->phone = $phone;
  	}
  	
	public function &getCelular() 
  	{
    	return $this->celular;
  	}
  
  	public function setCelular(&$celular) 
  	{
    	$this->celular = $celular;
  	}
  
  	public function &getUnity() 
  	{
    	return $this->unity;
  	}
  
  	public function setUnity(&$unity) 
  	{
    	$this->unity = $unity;
  	}
  
  	public function &getId() 
  	{
    	return $this->id;
  	}
  
  
  	public function setId(&$id) 
  	{
    	$this->id = $id;
  	}
  
  
 	public function &getExtention() 
 	{
    	return $this->extention;
  	}
  
  	public function setExtention(&$extention) 
  	{
    	$this->extention = $extention;
  	}
  
  	public function &getCareer() 
  	{
    	return $this->career;
  	}
  
  	public function setCareer(&$career) 
  	{
    	$this->career = $career;
  	}
  
  	public function &getAddress() 
  	{
    	return $this->address;
  	}
  
  	public function setAddress(&$address) 
  	{
    	$this->address = $address;
  	}
  
 	public function &getState() 
 	{
    	return $this->state;
  	}
  
  	public function setState(&$state) 
  	{
    	$this->state = $state;
  	}
  
 	public function &getIdTypeTrainer() 
 	{
    	return $this->idtypetrainer;
  	}
  
  	public function setIdTypeTrainer(&$idtypetrainer) 
  	{
    	$this->idtypetrainer = $idtypetrainer;
  	}
  	
	public function &getIdTypeSchool() 
 	{
    	return $this->idtypeschool;
  	}
  
  	public function setIdTypeSchool(&$idtypeschool) 
  	{
    	$this->idtypeschool = $idtypeschool;
  	}
  	
	public function &getActivateLink() 
 	{
    	return $this->activatelink;
  	}
  
  	public function setIdTypeSchool(&$activatelink) 
  	{
    	$this->activatelink = $activatelink;
  	}
  	
  	public function get() 
  	{	
  		$parameters=array($this->mail,$this->password,$this->id,$this->name,$this->surname,$this->address,$this->gender,$this->idtypeschool,$this->birthdate,$this->phone,$this->celular,$this->carnet,$this->unity,$this->extention,$this->career,$this->state,$this->idtypetrainer,$this->activatelink);
  		return $parameters;
  	}
}

?>
