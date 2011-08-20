<?php  
	require_once("Control.php");
	require_once("ControlService.php");
	require_once("../model/ServiceQuery.php");
	require_once("../model/mapping/TbUser.php");
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
		  
		private function getResult($result)
		{
			if ($result=='OK')
			{
				//echo json_encode(array('success'=>true,'uno'=>$resultmail));
				echo json_encode(array('success'=>true,'uno'=>$this->objuser->getPassw(),'dos'=>$this->objuser->getPassword()));
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
				//$objmail=new Mailer($this->objuser);
				//$resultmail=$objmail->sender($result);
			}
			$this->getResult($result);
		}
		
		public function recover()
		{
			//si se desea activar el envio de correo, se debe descomentar lo anterior y afectar el metodo getRecov de $this->ojbuser para que envie la activacion del link
			//y en el script actualizar para que en lugar de actualizar el password actualize la activacion de link
			$result='OK';
			$password=ControlService::generateRandom(10);
			$this->objuser->setPassw($password);
			$passhid=md5($password);
			$this->objuser->setPassword($passhid);
			$result=$this->objservice->recover($this->objuser);
			//esta parte el envio de correo y la generacion de la clave del link
			/*$linkhid=md5('getPassword('.$password.')');
			$this->objuser->setActivateLink($linkhid);
			$result=$this->objservice->recover($this->objuser);
			if($result=='OK')
			{
				$objmail=new MailerRecover($this->objuser);
				$resultmail=$objmail->sender();
			}*/
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
		
		public function editProfile($iduser)
		{
			$result='OK';
			$this->objuser->setIdUser($iduser);
			if(!$this->objuser->getPassw()){	$this->objuser->setPassword(null);}
			$result=$this->objservice->updateChangeProfile($this->objuser);
			return $this->getResult($result,$resultmail);
		}
	} 
?>