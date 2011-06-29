<?php
	require_once("Validator.php");	

	class ValidatorInteger extends Validator
	{  
		public function ValidatorInteger($namefield,$field,$required)
		{  
			$this->setNameField($namefield);
			$this->setField($field);
			$this->setRequired($required);
		}
		
		public function verify()
		{
			if($this->validate())
			{
				return false;
			}
			else
			{
				if($this->isEmpty()) return true;
			}
			
			if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$this->field)) 
			{
    			$this->message=$this->message.'\n Porfavor escriba un correo electronico valido';
				return false;
			}
			return true;
		}   
	}

?>