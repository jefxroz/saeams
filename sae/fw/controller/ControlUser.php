<?php  
	require_once("clrView.php");
	require_once("clrService.php");
	require_once("../connectionclass/dbServiceQuery.php");
	require_once("../mapping/Tbuser.php");
	class clrUser extends clrView
	{  
		private $objservice; 
		private $objuser;
		private $service;
  
		public function clrUser($mail,$password,$id,$name,$surname,$address,$gender,$idtypeschool,$birthdate,$phone,$celular,$carnet,$unity,$extention,$career,$state,$idtypetrainer,$service)
		{  
			$this->service=$service;
			$this->objservice=new dbServiceQuery();
			$link=clrService::generateRandom(25);
	
			$this->objuser=new TbUser($mail,$password,$id,$name,$surname,$address,$gender,$idtypeschool,$birthdate,$phone,$celular,$carnet,$unity,$extention,$career,$state,$idtypetrainer,$link);
		
		}
		  
		public function ejecute()
		{  
			$result='OK';
			if ($this->service==1)
			{
				$result= $this->registerStudent();	
			}	
			else
			{
				echo json_encode(array('msg'=>'No se realizo la accion solicitada'));
			}
			$this->getResult($result);
		}  
		
		private function getResult($result)
		{
			if ($result=='OK')
			{
				echo json_encode(array('success'=>true));
			} 
			else 
			{
				echo json_encode(array('msg'=>$result));
			}
		}
		
		
		private function registerStudent()
		{
			return $this->objservice->insertUserStudent($this->objuser);
		}
	}
?>