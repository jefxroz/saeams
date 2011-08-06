<?php

class TbUser {
  
	private $iduser;
  
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
  	
  	private $passw;
  	
  	private $privileges;
  	
	public function TbUser($mail,$password,$id,$name,$surname,$address,$gender,$idtypeschool,$birthdate,$phone,$celular,$carnet,$unity,$extention,$career,$state,$idtypetrainer)
	{
		$this->mail=$mail;
		$this->password=md5($password);
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
		$this->passw=$password;
	}
	public function &getPassw()
	{
		return $this->passw;
	} 
	public function setPassw($passw)
	{
		$this->passw=$passw;
	}
	
  	public function &getIdUser() 
  	{
    	return $this->iduser;
  	}
  
  	public function setIdUser(&$iduser) 
  	{
    	$this->iduser = $iduser;
  	}
    
  	public function &getName() 
  	{
    	return $this->name;
  	}

  	public function setName(&$name) 
  	{
    	$this->name = $name;
  	}
  	
  	public function &getSurName() 
  	{
    	return $this->surname;
  	}

  	public function setSurName(&$surname) 
  	{
    	$this->surname = $surname;
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
 	
  	public function setPassword($password) {
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
  
  	public function setActivateLink($activatelink) 
  	{
    	$this->activatelink = $activatelink;
  	}
  	
	public function &getPrivileges() 
 	{
    	return $this->privileges;
  	}
  
  	public function setPrivileges($privileges) 
  	{
    	$this->privileges = $privileges;
  	}
  	
  	public function get() 
  	{	
  		$parameters=array($this->mail,$this->password,$this->id,$this->name,$this->surname,$this->address,$this->gender,$this->idtypeschool,$this->birthdate,$this->phone,$this->celular,$this->carnet,$this->unity,$this->extention,$this->career,$this->state,$this->idtypetrainer,$this->activatelink);
  		return $parameters;
  	}
  	
	public function getAll() 
  	{	
  		
  		$parameters=array($this->iduser,$this->mail,$this->password,$this->id,$this->name,$this->surname,$this->address,$this->gender,$this->idtypeschool,$this->birthdate,$this->phone,$this->celular,$this->carnet,$this->unity,$this->extention,$this->career,$this->state,$this->idtypetrainer,$this->activatelink);
  		return $parameters;
  	}
  	
  	public function getRecov()
  	{
  		$parameters=array($this->mail,$this->activatelink);
  		return $parameters;
  	}
  	
	public function getValidate()
  	{
  		$parameters=array($this->mail,$this->password);
  		return $parameters;
  	}
	public function getProfile()
  	{
  		$parameters=array($this->iduser,$this->password,$this->id,$this->address,$this->carnet,$this->unity,$this->extention,$this->career);
  		return $parameters;
  	}
}

?>
