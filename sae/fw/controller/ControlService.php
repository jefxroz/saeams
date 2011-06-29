<?php
	
	require_once("../model/ServiceQuery.php");
	
	class ControlService
	{      
		private $service;
		public function ControlService($service)
		{  
			$this->service = $service;
		}
		
		public function randomText($length) 
		{
    		$pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    		for($i=0;$i<$length;$i++) 
    		{
      			$key .= $pattern{rand(0,35)};
    		}
    		return $key;
		}
		
		public static function generateRandom($length)
		{  
    		$exp_reg="[^A-Z0-9]";  
    		return substr(eregi_replace($exp_reg, "", md5(rand())).eregi_replace($exp_reg, "", md5(rand())) .eregi_replace($exp_reg, "", md5(rand())),0, $lenght);
		}
		
		public function getService()
		{
			if($this->service=='getcaptcha')
			{
				$var=$this->randomText(8);
				return json_encode(array('uno'=>$var,'dos'=>md5('getcaptcha('.$var.')')));
			}
			else if($this->service=='getschool')
			{
				$objservice=new ServiceQuery();
				return json_encode($objservice->getTypeSchool());
			}
		}
		 
		
	}

?>