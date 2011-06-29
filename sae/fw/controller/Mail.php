<?php
	
	class Mail
	{      
		private $service;
		public function Mail($service)
		{  
			$this->service = $service;
		}
		
		public function send()
		{
			if($this->service=='getcaptcha')
			{
				$var=$this->randomText(8);
				return json_encode(array('uno'=>$var,'dos'=>md5('getcaptcha('.$var.')')));
			}
			else if($this->service=='getschool')
			{
				$objservice=new dbServiceQuery();
				return json_encode($objservice->getTypeSchool());
			}
		}
		 
		
	}

?>