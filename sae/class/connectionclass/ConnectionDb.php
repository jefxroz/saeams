<?php  
	class ConnectionDb
	{  
		private $conexion;  
		private $total_querys;  
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
		public function ejecuteQuery($p_query)
		{  
			$this->total_querys++;  
			$l_result = pg_Exec($this->conexion,$p_query);  
			return getValidateResult($l_result);
		}  
		public function ejecuteQuery($p_query,$p_parameters){
			$this->total_querys++;  
			$l_result = pg_prepare($this->conexion, "my_query", $p_query);
			$l_result = pg_execute($this->conexion, "my_query", $p_parameters); 
			return getValidateResult($l_result);
		}
		public function ejecuteStatement($p_query,$p_parameters)
		{
			$l_result = pg_prepare($dbconn, "my_query", $p_query);
			$l_result = pg_execute($dbconn, "my_query", $p_parameters);
			return getValidateResult($l_result);
		}
		
		private function getValidateResult($result){
			if(!$result)
			{  
				echo 'PgError ' . pg_error();  
				exit;
			}
			return $result;
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