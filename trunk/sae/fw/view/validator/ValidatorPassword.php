<?php
	require_once("Validator.php");	

	class ValidatorPassword extends Validator
	{  
		
		public function ValidatorPassword($namefield,$field,$required)
		{  
			$this->setNameField($namefield);
			$this->setField($field);
			$this->setRequired($required);
		}
		
		public function verify($passcomp)
		{
			if(!$this->validate())
			{
				return false;
			}
			else
			{
				if($this->isEmpty()) return true;
			}
			
			if(!$passcomp)
			{
				$this->addMessage('\n El campo de repetir contraseña es requerido');
				return false;	
			}
			
			if($this->getField()!=$passcomp)
			{
				$this->addMessage('\n Debe ingresar la misma constraseña');
				return false;
			}	
			return true;
		}   
	}
?>