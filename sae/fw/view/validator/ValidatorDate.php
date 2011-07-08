<?php
	require_once("Validator.php");	

	class ValidatorDate extends Validator
	{  
		public function ValidatorDate($namefield,$field,$required)
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
			
			if (!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $this->getField())) 
			{
				$this->addMessage('\n Porfavor escriba una fecha valida');
    			return false;
			}
			return true;
		}   
	}

?>