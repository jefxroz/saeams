<?php  

	class clrUser extends ClrView
	{  
		private $objservice; 
		private $user;
		private $password;
		private $id;
		private $name;
		private $address;
		private $gender;
		private $birthdate;
		private $carne;
		private $unity;
		private $extension;
		private $career;
		private $service;
  
		public function clrUser($user,$password,$id,$name,$address,$gender,$birthdate,$carne,$unity,$extension,$career,$service)
		{  
			$this->service=$service;
			$this->objservice=new dbServiceQuery();
			$this->tbuser=new TbUser($user,$password,$id,$name,$address,$gender,$birthdate,$carne,$unity,$extension,$career);
		}  
		public function ejecute()
		{  
			if ($service==1){
				register();
			}	
			
		}  
		private function register(){
			$objservice->insertUser($this->$tbuser);
		}
		 
	}
?>