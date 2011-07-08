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
			if(!$this->validate())
			{
				return false;
			}
			else
			{
				if($this->isEmpty()) return true;
			}
			
			if (!preg_match('/^[0-9]+$/',$this->getField())) 
			{
				$this->addMessage('\n Porfavor escriba un numero valido');
    			return false;
			}
			return true;
		}   
	}

?>