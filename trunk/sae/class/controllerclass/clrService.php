<?php
	
	require_once("../connectionclass/dbServiceQuery.php");
	
	class clrService
	{      
		private $service;
		public function clrService($service)
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
		
		public function getService()
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