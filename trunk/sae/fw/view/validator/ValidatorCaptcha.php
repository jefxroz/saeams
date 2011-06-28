<?php  
	class ValidatorCaptcha
	{  
		private $namefield;
		private $field;
		private $hidfield;
		
		public function ValidatorCaptcha($namefield,$field,$hidfield)
		{  
			$this->namefield=$namefield;
			$this->field=$field;
			$this->hidfield=$hidfield;
		}
		
		public function setField($field)
		{
			$this->field=field;
		}
		public function getField()
		{
			return $this->field;	
		}
		public function validate()
		{
			if ($this->hidfield == md5('getcaptcha('.$this->field.')')) 
			{
				return true;
			} 
			else 
			{
				return false;
			}
		}   
	}
?>