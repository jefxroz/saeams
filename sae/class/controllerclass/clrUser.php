<?php  

	class clrUser extends ClrView
	{  
		private $objservice; 
		private $user;
		private $service;
  
		public function clrUser($user,$password,$id,$name,$address,$gender,$birthdate,$carne,$unity,$extension,$career,$service)
		{  
			$this->service=$service;
			$this->objservice=new dbServiceQuery();
			$this->tbuser=new Tbuser($user,$password,$id,$name,$address,$gender,$birthdate,$carne,$unity,$extension,$career);
		}  
		public function ejecute()
		{  
			if ($service==1)
			{
				register();
			}	
			
		}  
		private function register(){
			$tbrol=$objservice->getRol("ESTUDIANTE");
			$this->tbuser->setRol(tbrol);
			$objservice->insertUser($this->$tbuser);
		}
		 
	}
?>