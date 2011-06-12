<?php  

	class ControllerUser
	{  
		private $objservice; 
  		//private $
		public function ControllerUser()
		{  
			$objservice=new ServiceQueryDb();
			  
		}  
		public function register($user)
		{  
			$objservice->insertUser($user);
		}  
		 
	}
		