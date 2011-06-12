<?php  
	class ConnectionDb
	{  
		private $conexion;  
		private $total_querys;  
		private $name;
		public function ConnectionDb()
		{  
			$host_db='localhost';
			$port_db='5432';
			$base="sae_dbassignations";
			$usuario="saeweb";
			$password="saeweb";
			if(!isset($this->conexion))
			{  
				$this->conexion = (pg_connect("host=$host_db port=$port_db dbname=$base user=$usuario password=$password")) or die(mysql_error());  
				//pg_select_db("dbAsignaciones",$this->conexion) or die(mysql_error());  
			}  
			
		}  
		
		public function preparedStatement($name,$p_statement)
		{
			$l_result = pg_prepare($this->conexion, $name, $p_statement);
			$this->name=$name;
		}
		
		private function validateResult($result){
			if(!$result)
			{  
				echo 'PgError ' . pg_error();  
				exit;
			}
			return $result;
		}
		private function validateParameters($p_parameters)
		{
			for($i=0;$i<count($p_parameters);$i++)
			{
				$p_parameters[i]=pg_escape_string($p_parameters[$i]);
				
			}
			return p_parameters;
		}
		public function ejecuteStatement($p_name,$p_parameters){
			if(p_name==$this->name)
			{
				if (validateParameters(p_parameters))
				{
					$l_result = pg_execute($this->conexion, $this->name, $p_parameters);
				}
			}
			else 
			{
				echo "La consulta preparada y la ejecutada no coinciden!!";	
			}
			return validateResult($l_result);
		}
		
		public function ejecuteQuery($p_query)
		{  
			$this->total_querys++;  
			$l_result = pg_Exec($this->conexion,$p_query);  
			return validateResult($l_result);
		}  
		
		public function ejecuteQuery($p_query,$p_parameters)
		{
			$this->total_querys++;  
			$l_namequery=preparedQuery($p_query);
			$l_result = pg_execute($this->conexion, $l_namequery, $p_parameters); 
			return validateResult($l_result);
		}
		
		
		public function getResult($p_objquery)
		{   
			return pg_Fetch_Array($p_objquery);  
		}  
		public function getRow($p_objquery,$p_index)
		{
			return pg_Fetch_Array ($p_objquery, $p_index);
		}
		public function getNumRows($p_query)
		{   
			return pg_num_rows($p_query);  
		}  
		public function getTotalQuerys()
		{  
			return $this->total_querys;  
		}
		  
}?>