<?php  
	require_once("Connection.php");
	require_once("mapping/TbTypeSchool.php");

	class ServiceQuery
	{  
		private $objuser;    
		private $objconn;
		public function ServiceQuery()
		{  
			$this->objconn = new Connection(); 
		}  
		public function setUser(&$user)
		{
				$this->$objuser=$objuser; 
		}
		public function getUser()
		{
			return $this->objuser;
		}
		public function getTypeSchool()
		{
				$result=$this->objconn->ejecuteQuery("SELECT idtypeschool,name from tbtypeschool;");
				while($row = $this->objconn->getResult($result))
				{ 
					$typeschool=new TbTypeSchool($row['idtypeschool'],$row['name']); 
					$school[]=$typeschool->getObjects();
				}
			
			return $school;
		}
		public function insertUserStudent($objuser)
		{
			if($this->objconn->prepared("INSERT_USER","SELECT f_insertStudent($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14,$15,$16,$17);"))
			{	
				$result=$this->objconn->ejecuteStatement("INSERT_USER",$objuser->get());
				$row = $this->objconn->getRow($result,0 );
				return $row[0];
			}
		}		
	}
?>