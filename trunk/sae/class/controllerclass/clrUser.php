<?php  
	class clrUser extends ClrView
	{  
		private $objservice; 
		private $objuser;
		private $service;
  
		public function clrUser($user,$password,$id,$name,$address,$gender,$birthdate,$carne,$unity,$extension,$career,$service)
		{  
			$this->service=$service;
			$this->objservice=new dbServiceQuery();
			$this->objuser=new Tbuser($user,$password,$id,$name,$address,$gender,$birthdate,$carne,$unity,$extension,$career);
		}  
		public function ejecute()
		{  
			if ($service==1)
			{
				register();
			}	
		}  
		private function register()
		{
			$tbrol=$objservice->getRol("ESTUDIANTE");
			if($tbrol -> getName() != '')
			{
				$this->objuser->setRol(tbrol);
				$objservice->insertUser($this->$objuser);
				echo json_encode(array('success'=>true));
			}
			else
			{
				echo json_encode(array('msg'=>'Some errors occured.'));
			}
		}
	}
?>