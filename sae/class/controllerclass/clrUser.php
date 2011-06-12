<?php  

	class clrUser extends ClrView
	{  
		private $objservice; 
  		//private $
		public function clrUser()
		{  
			$objservice=new dbServiceQuery();
			  
		}  
		public function register($user)
		{  
			$objservice->insertUser($user);
		}  
		 
	}
?>