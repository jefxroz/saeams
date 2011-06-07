<?php  
	class ControllerUser
	{  
		private $obj_user; 
  		//private $
		public function ControllerUser($obj_user)
		{  
			$this->$obj_user=$obj_user;  
		}  
		public function register()
		{  
			$this->total_querys++;  
			$resultado = pg_Exec($this->conexion,$consulta);  
			if(!$resultado)
			{  
				echo 'PgError ' . pg_error();  
				exit;
			}
			return $resultado;
		}  
		public function updateData()
		{
			$resultado = pg_insert($this->conexion,$consulta,$POST);  
			return $resultado;
		}
		
		public function delete($query)
		{   
			return pg_Fetch_Array($query);  
		}  
	}
		