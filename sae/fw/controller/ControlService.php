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
    		return substr(eregi_replace($exp_reg, "", md5(rand())).eregi_replace($exp_reg, "", md5(rand())) .eregi_replace($exp_reg, "", md5(rand())),0, $length);
		}
		
		public function getCaptcha()
		{
			$var=$this->randomText(8);
			return json_encode(array('uno'=>$var,'dos'=>md5('getcaptcha('.$var.')')));
		}
		public function getSchool()
		{
			$objservice=new ServiceQuery();
			return json_encode($objservice->getTypeSchool());
		}
		public function Activate($code,$activatekey)
		{
			$objservice=new ServiceQuery();
			$array=array($code,$activatekey);
			$response=$objservice->activateUserStudent($array);
			if($response=='OK')
			{
				return "Activacion de cuenta realizada correctamente";
			}
			else
			{
				return "No se realizo la activacion de cuenta correctamente";
			}
		}
		
		public function ActivateRecover($code,$activatekey,$password)
		{
			$objservice=new ServiceQuery();
			$passw=md5($password);
			$array=array($code,$passw,$activatekey);
			$response=$objservice->activateRecover($array);
			if($response=='OK')
			{
				return "Su contraseña ha sido cambiada con exito";
			}
			else
			{
				return "No se realizo la activacion de cuenta correctamente";
			}
		}
		public function getInstitution()
		{
			$objservice=new ServiceQuery();
			return json_encode($objservice->getInstitution());
		}
		public function getStates()
		{
			$objservice=new ServiceQuery();
			return json_encode($objservice->getStates());
		}
		
		 
		
	}

?>