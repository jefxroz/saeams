<?php  
	require_once("Connection.php");
	require_once("mapping/TbTypeSchool.php");
	require_once("mapping/TbPrivilege.php");
	require_once("mapping/TbInstitution.php");

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
		
		public function getCourses()
		{
				$result=$this->objconn->ejecuteQuery("SELECT i.idinstitution ,i.name as institucion,c.idcourse,c.name as curso,c.duration as duracion FROM tbcourse c,tbinstitution i WHERE c.idinstitution=i.idinstitution AND c.state=1 AND   i.state=1;");
				while($row = $this->objconn->getResult($result))
				{ 
					$objcourse=new TbCourse($row[2],$row[3],null,$row[4],$row[0],$row[1]); 
					$courses[]=$objcourse->getObjects();
				}
			
			return $courses;
		}
		
		public function getidcourses($idcourse)
		{	
				$result=$this->objconn->ejecuteQuery("SELECT i.idinstitution ,i.name as institucion,c.idcourse,c.name as curso, c.description as descripcion,c.duration as duracion FROM tbcourse c,tbinstitution i WHERE c.idinstitution=i.idinstitution AND c.state=1 AND  i.state=1 and c.idcourse=".$idcourse.";");
				$row = $this->objconn->getRow($result,0 );
				$objcourse=new TbCourse($row[2],$row[3],$row[4],$row[5],$row[0],$row[1]);
				return $objcourse->getObjects();
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
		
		public function validateUser(&$objuser)
		{
			if($this->objconn->prepared("VALIDATE_USER","SELECT * from f_validateuser($1,$2);"))
			{	
				$result=$this->objconn->ejecuteStatement("VALIDATE_USER",$objuser->getValidate());
				$row = $this->objconn->getRow($result,0 );
								
				$objuser->setIdUser($row[1]);
				$objuser->setName($row[2]);
				if($objuser->getIdUser())
				{
					while($row = $this->objconn->getResult($result))
					{ 	
						if($row[0]!=1)
						{
							$privilege=new TbPrivilege($row[1],$row[2]); 
							$privileges[]=$privilege;
						}
					}	
					if($privileges) 
					{
						$objuser->setPrivileges($privileges);
					}
					
					if($this->objconn->prepared("GET_USER","SELECT * from tbuser where iduser=$1"))
					{
						$param=array($objuser->getIdUser());
						$resultu=$this->objconn->ejecuteStatement("GET_USER", $param);
						$rowu=$this->objconn->getRow($resultu,0);
						$objuser->setMail($rowu[1]);
						$objuser->setPassword($rowu[2]);
						$objuser->setId($rowu[3]);
						$objuser->setName($rowu[4]);
						$objuser->setSurname($rowu[5]);
						$objuser->setAddress($rowu[6]);
						$objuser->setGender($rowu[7]);
						$objuser->setBirthDate($rowu[8]);
						$objuser->setCarnet($rowu[11]);
						$objuser->setUnity($rowu[12]);
						$objuser->setExtention($rowu[13]);
						$objuser->setCareer($rowu[14]);
					}
					return true;
				}
				return false;
			}
		}
		public function updateChangeProfile(&$objuser)
		{
			if($this->objconn->prepared("UPDATE_PROFILE","SELECT * from f_editprofile($1,$2,$3,$4,$5,$6,$7,$8);"))
			{	
				$result=$this->objconn->ejecuteStatement("UPDATE_PROFILE",$objuser->getProfile());
				$row = $this->objconn->getRow($result,0 );
				$objuser->setIdUser($row[1]);
				return $row[0];
			}
		}
		public function getInstitution()
		{
				$result=$this->objconn->ejecuteQuery("SELECT idinstitution,name from tbinstitution where state=1;");
				while($row = $this->objconn->getResult($result))
				{ 
					$objinst=new TbInstitution($row['idinstitution'],$row['name']); 
					$institutions[]=$objinst->getObjects();
				}
			
			return $institutions;
		}
		
		public function insertCourse(&$objcourse)
		{
			if($this->objconn->prepared("INSERT_COURSE","SELECT * from f_insertCourse($1,$2,$3,$4);"))
			{	
				$result=$this->objconn->ejecuteStatement("INSERT_COURSE",$objcourse->get());
				$row = $this->objconn->getRow($result,0);
				$objcourse->setIdCourse($row[1]);
				return $row[0];
			}
		}
		
		public function updateCourse(&$objcourse)
		{
			if($this->objconn->prepared("UPDATE_COURSE","SELECT * from f_updatecourse($1,$2,$3,$4,$5,$6);"))
			{	
				
				$result=$this->objconn->ejecuteStatement("UPDATE_COURSE",$objcourse->getUpdate());
				
				$row = $this->objconn->getRow($result,0);
				//$objcourse->setIdCourse($row[1]);
				return $row[0];
			}
		}
		public function deleteCourse(&$objcourse)
		{
			if($this->objconn->prepared("DELETE_COURSE","SELECT * from f_updatecourse($1,$2,$3,$4,$5,$6);"))
			{	
				
				$result=$this->objconn->ejecuteStatement("DELETE_COURSE",$objcourse->getDelete());
				
				$row = $this->objconn->getRow($result,0);
				//$objcourse->setIdCourse($row[1]);
				return $row[0];
			}
		}
		
	}
?>