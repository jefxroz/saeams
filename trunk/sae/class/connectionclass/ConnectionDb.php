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
		public function ejecuteQuery($consulta)
		{  
			$this->total_querys++;  
			$result = pg_Exec($this->conexion,$consulta);  
			if(!$result)
			{  
				echo 'PgError ' . pg_error();  
				exit;
			}
			return $result;
		}  
		public function ejecuteStatement($query,$parameters)
		{
			$result = pg_prepare($dbconn, "my_query", $query);
			$result = pg_execute($dbconn, "my_query", $parameters);
			if(!$result)
			{  
				echo 'PgError ' . pg_error();  
				exit;
			}
			return $result;
		}
		
		public function getResult($query)
		{   
			return pg_Fetch_Array($query);  
		}  
		public function getRow($query,$index)
		{
			return pg_Fetch_Array ($query, $index);
		}
		public function getNumRows($query)
		{   
			return pg_num_rows($query);  
		}  
		public function getTotalQuerys()
		{  
			return $this->total_querys;  
		}  
}?>