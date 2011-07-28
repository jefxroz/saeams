<?php  
	require_once("Control.php");
	require_once("ControlService.php");
	require_once("../model/ServiceQuery.php");
	require_once("../model/mapping/Tbuser.php");
	require_once("mailer/Mailer.php");
	require_once("mailer/MailerRecover.php");
	
	class ControlUser extends Control
	{  
		private $objservice; 
		private $objuser;
		
		public function ControlUser($mail,$password,$id,$name,$surname,$address,$gender,$idtypeschool,$birthdate,$phone,$celular,$carnet,$unity,$extention,$career,$state,$idtypetrainer)
		{  
			$this->objservice=new ServiceQuery();
			$this->objuser=new TbUser($mail,$password,$id,$name,$surname,$address,$gender,$idtypeschool,$birthdate,$phone,$celular,$carnet,$unity,$extention,$career,$state,$idtypetrainer);
		}
		
		public function setUser($objuser)
		{
			$this->objuser=$objuser;
		}
		
		public function getUser()
		{
			return $this->objuser;
		}
		  
		private function getResult($result,$resultmail)
		{
			if ($result=='OK')
			{
				echo json_encode(array('success'=>true,'uno'=>$resultmail));
			} 
			else 
			{
				echo json_encode(array('msg'=>$result));
			}
		}
		
		public function registerStudent()
		{
			$result='OK';
			$key=ControlService::generateRandom(10);
			$this->objuser->setActivateLink(md5('getPassword('.$key.')'));
			$result=$this->objservice->insertUserStudent($this->objuser);
			if($result=='OK')
			{
				$objmail=new Mailer($this->objuser);
				$resultmail=$objmail->sender($result);
			}
			$this->getResult($result,$resultmail);
		}
		
		public function recover()
		{
			$result='OK';
			$password=ControlService::generateRandom(10);
			$this->objuser->setPassw($password);
			$passhid=md5($password);
			$this->objuser->setPassword($passhid);
			$linkhid=md5('getPassword('.$password.')');
			$this->objuser->setActivateLink($linkhid);
			$result=$this->objservice->recover($this->objuser);
			if($result=='OK')
			{
				$objmail=new MailerRecover($this->objuser);
				$resultmail=$objmail->sender();
			}
			$this->getResult($result,$resultmail);
		}
		
		public function validate()
		{
			$result='OK';
			$result=$this->objservice->validateUser($this->objuser);
			if($result)
			{
				
				$resultmail='';
				return true;
			}
			else 
			{
				$result='Problema';
				return false;
			}
		}
	}
?>