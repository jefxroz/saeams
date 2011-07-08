<?php
	require_once("Validator.php");	

	class ValidatorMail extends Validator
	{  
		public function ValidatorMail($namefield,$field,$required)
		{  
			$this->setNameField($namefield);
			$this->setField($field);
			$this->setRequired($required);
		}
		
		public function verify()
		{
			if(!$this->validate())
			{
				return false;
			}
			else
			{
				if($this->isEmpty()) return true;
			}
			
			if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$this->getField())) 
			{
    			$this->addMessage('\n Porfavor escriba un correo electronico valido');
				return false;
			}
			return true;
		}   
	}

?>