<?php  
	require_once("clrView.php");
	require_once("../connectionclass/dbServiceQuery.php");
	require_once("../mapping/Tbuser.php");
	class clrUser extends clrView
	{  
		private $objservice; 
		private $objuser;
		private $service;
  
		public function clrUser($mail,$password,$id,$name,$surname,$address,$gender,$birthdate,$carnet,$unity,$extention,$career,$state,$idtypetrainer,$service)
		{  
			echo "Vamos en user";
			$this->service=$service;
			echo "".$this->service;
			$this->objservice=new dbServiceQuery();
			
			$this->objuser=new TbUser($mail,$password,$id,$name,$surname,$address,$gender,$birthdate,$carnet,$unity,$extention,$career,$state,$idtypetrainer);
			/*echo "User Mail ".$this->objuser->getMail();
			echo "User Password ".$this->objuser->getPassword();
			echo "User Id ".$this->objuser->getId();
			echo "User Name ".$this->objuser->getName();
			echo "User Surname ".$this->objuser->getSurName();
			echo "User Address ".$this->objuser->getAddress();
			echo "User Gender ".$this->objuser->getGender();
			echo "User Birthdate ".$this->objuser->getBirthdate();
			echo "User Carnet ".$this->objuser->getCarnet();
			echo "User Unity ".$this->objuser->getUnity();
			echo "User Extention ".$this->objuser->getExtention();
			echo "User Career ".$this->objuser->getCareer();
			echo "User IdTypeTrainer ".$this->objuser->getIdTypeTrainer();*/
		}  
		
		public function ejecute()
		{  
			echo "service ".$this->service;
			if ($this->service==1)
			{
				
				$this->registerStudent();
				return "Registrar ";
				
			}	
		}  
	private function registerStudent()
		{
			$this->objservice->insertUserStudent($this->objuser);
		}
	}
?>