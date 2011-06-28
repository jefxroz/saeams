<?php  
	class Validator
	{  
		private $namefield;
		private $field; 
		public $message;
		private $required; // Tipo Boleeando
		private $typemail; // Tipo Booleano
		private $min;      // Tipo entero valor minimo de caracteres
		private $max;      // Tipo entero valor maximo de caracteres;
		private $typedate;  // Tipo Booleano
		private $typeint;   // Tipo Booleano 
		
		public function Validator($namefield,$field,$required)
		{  
			$this->namefield=$namefield;
			$this->field=$field;
			$this->required=$required;
		}
		
		public function setField($field)
		{
			$this->field=field;
		}
		public function getField()
		{
			return $this->field;	
		}
		public function setTypeMail($typemail)
		{  
			$this->typemail=$typemail;
		}  
		public function getTypeMail($typemail)
		{  
			return $this->typemail;
		}  
		
		public function setTypeInt($typeint)
		{  
			$this->typeint=$typeint;
		}  
		
		public function getTypeInt($typeint)
		{  
			return $this->typeint;
		}
		
		public function setTypeDate($typedate)
		{  
			$this->typedate=$typedate;
		} 
		
		public function getTypeDate($typedate)
		{  
			return $this->typedate;
		} 
		
		public function setMin($min)
		{  
			$this->min=$min;
		}  
		public function getMin()
		{  
			return $this->min;
		} 
		
		public function setMax($max)
		{  
			$this->max=$max;
		}
		public function getMax()
		{  
			return $this->max;
		}
		public function validate()
		{
			$this->message=$this->namefield.': ';

			if($this->required)
			{
				if($this->field!=0 and empty($this->field))
				{
					$this->message=$this->message.'\n Este campo es requerido';
					return false;
				}	
			}
			else
			{
				if(!$this->field){ $this->field=null; return true;}
			}
			
			if($this->typemail)
			{
				if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$this->field)) 
				{
    				$this->message=$this->message.'\n Porfavor escriba un correo electronico valido';
					return false;
				}
			}	
			else if($this->typeint)
			{
				if (!preg_match('/^[0-9]+$/',$this->field)) 
				{
    				$this->message=$this->message.'\n Porfavor escriba un numero valido';
					return false;
				}

			}
			else if($this->typedate)
			{
				if (!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $this->field)) 
				{
    				$this->message=$this->message.'\n Porfavor escriba una fecha valida';
					return false;
				}
			}
			if($this->min and strlen($this->field)<$this->min)
			{
				$this->message=$this->message.'\n Debe introducir minimo '.$this->min." caracteres";
				return false;
			}
			if($this->max and strlen($this->field)>$this->max)
			{
				$this->message=$this->message.'\n Debe introducir maximo '.$this->max." caracteres";
				return false;
			}
			return true;
		}   
		
		public function validatePassword($passcomp)
		{
			$this->message=$this->namefield.': ';

			if($this->required)
			{
				if(!$this->field)
				{
					$this->message=$this->message.'\n Este campo es requerido';
					return false;
				}	
				else if(!$passcomp)
				{
					$this->message=$this->message.'\n El campo de repetir contraseña es requerido';
					return false;	
				}
			}
			if($this->min and strlen($this->field)<$this->min)
			{
				$this->message=$this->message.'\n Debe introducir minimo '.$this->min." caracteres";
				return false;
			}		
			if($this->field!=$passcomp)
			{
    				$this->message=$this->message.'\n Debe ingresar la misma constraseña';
					return false;
			}	
			return true;
		}   
		
		
	}
?>