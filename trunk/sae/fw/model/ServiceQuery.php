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
		public function insertUserStudent(&$objuser)
		{
			if($this->objconn->prepared("INSERT_USER","SELECT * from f_insertStudent($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14,$15,$16,$17,$18);"))
			{	
				$result=$this->objconn->ejecuteStatement("INSERT_USER",$objuser->get());
				$row = $this->objconn->getRow($result,0 );
				$objuser->setIdUser($row[1]);
				return $row[0];
			}
		}
		
		public function activateUserStudent($accountparam)
		{
			if($this->objconn->prepared("ACTIVATE_USER","SELECT * from f_activateStudent($1,$2);"))
			{	
				$result=$this->objconn->ejecuteStatement("ACTIVATE_USER",$accountparam);
				$row = $this->objconn->getRow($result,0 );
				return $row[0];
			}
		}
		public function recover(&$objuser)
		{
			if($this->objconn->prepared("RECOVER_USER","SELECT * from f_recover($1,$2);"))
			{	
				$result=$this->objconn->ejecuteStatement("RECOVER_USER",$objuser->getRecov());
				$row = $this->objconn->getRow($result,0 );
				$objuser->setIdUser($row[1]);
				$objuser->setName($row[2]);
				$objuser->setSurName($row[3]);
				return $row[0];
			}
		}		
		public function activateRecover($accountparam)
		{
			if($this->objconn->prepared("ACTIVATE_RECOVER","SELECT * from f_activateRecover($1,$2,$3);"))
			{	
				$result=$this->objconn->ejecuteStatement("ACTIVATE_RECOVER",$accountparam);
				$row = $this->objconn->getRow($result,0 );
				return $row[0];
			}
		}
		
	}
?>