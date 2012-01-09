<?php  
	require_once("Connection.php");
	require_once("mapping/TbTypeSchool.php");
	require_once("mapping/TbPrivilege.php");
	require_once("mapping/TbInstitution.php");
	require_once("mapping/TbState.php");
	require_once("mapping/TbInstitutionCourse.php");
	require_once("mapping/TbSection.php");

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
				$result=$this->objconn->ejecuteQuery("SELECT c.idcourse,c.name as curso,c.duration as duracion,s.description estado FROM tbcourse c,tbstatecourse s WHERE c.state=s.state order by c.idcourse asc");
				while($row = $this->objconn->getResult($result))
				{ 
					$objcourse=new TbCourse($row[0],$row[1],null,$row[2],null,null,null,null,null,null); 
					$courses[]=$objcourse->getObjects($row[3]);
				}
			
			return $courses;
		}
		
		//agregado como ejemplo de institucionces
		public function getInstitutions()
		{
				$result=$this->objconn->ejecuteQuery("SELECT i.idinstitution,i.name as institucion, s.description  estado  FROM tbinstitution i,tbstateinstitution s  WHERE i.state=s.state order by idinstitution asc;");
				while($row = $this->objconn->getResult($result))
				{
					$objinstitution=new TbInstitution($row[0],$row[1]); 
					$institutions[]=$objinstitution->getObjects1($row[2]);
				}
			
			return $institutions;
		}
		
		public function getidcourses($idcourse)
		{	
				$result=$this->objconn->ejecuteQuery("SELECT c.idcourse,c.name as curso, c.description as descripcion,c.duration as duracion,c.state estado FROM tbcourse c WHERE c.idcourse=".$idcourse.";");
				$row = $this->objconn->getRow($result,0 );
				$objcourse=new TbCourse($row[0],$row[1],$row[2],$row[3],null,null,null,null,null,null);
				return $objcourse->getObjects($row[4]);
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
		
		public function getCourseStates()
		{
				$result=$this->objconn->ejecuteQuery("SELECT s.state,s.description FROM tbstatecourse s;");
				while($row = $this->objconn->getResult($result))
				{ 
					$objstate=new TbState($row['state'],$row['description']); 
					$states[]=$objstate->getObjects();
				}
			
			return $states;
		}
		
		public function insertCourse(&$objcourse)
		{
			if($this->objconn->prepared("INSERT_COURSE","SELECT * from f_insertCourse($1,$2,$3);"))
			{	
				$result=$this->objconn->ejecuteStatement("INSERT_COURSE",$objcourse->getInsert());
				$row = $this->objconn->getRow($result,0);
				$objcourse->setIdCourse($row[1]);
				return $row[0];
			}
		}
		
		public function updateCourse(&$objcourse)
		{
			if($this->objconn->prepared("UPDATE_COURSE","SELECT * from f_updatecourse($1,$2,$3,$4,$5,$6,$7);"))
			{	
				
				$result=$this->objconn->ejecuteStatement("UPDATE_COURSE",$objcourse->getUpdate());
				
				$row = $this->objconn->getRow($result,0);
				//$objcourse->setIdCourse($row[1]);
				return $row[0];
			}
		}
		public function deleteCourse(&$objcourse)
		{
			if($this->objconn->prepared("DELETE_COURSE","SELECT * from f_updatecourse($1,$2,$3,$4,$5,$6,$7);"))
			{	
				
				$result=$this->objconn->ejecuteStatement("DELETE_COURSE",$objcourse->getDelete());
				
				$row = $this->objconn->getRow($result,0);
				//$objcourse->setIdCourse($row[1]);
				return $row[0];
			}
		}
		public function activateCourse($idcourse)
		{
			if($this->objconn->prepared("ACTIVATE_COURSE","SELECT * from f_activatecourse($1);"))
			{	
				
				$result=$this->objconn->ejecuteStatement("ACTIVATE_COURSE",array($idcourse));
				
				$row = $this->objconn->getRow($result,0);
				//$objcourse->setIdCourse($row[1]);
				return $row[0];
			}
		}
		
		public function getCoursesInstitutions($idcourse)
		{
				$result=$this->objconn->ejecuteQuery("SELECT i.idinstitution,i.name, ic.section, ic.cupo, ic.periodo, ic.anio, s.description FROM tbinstitutioncourse ic,tbinstitution i,tbstateinstitutioncourse s WHERE i.idinstitution=ic.idinstitution AND ic.state=s.state AND ic.idcourse=".$idcourse." order by ic.periodo, ic.anio, ic.section desc;");
				while($row = $this->objconn->getResult($result))
				{ 
					$objinstitutioncourse=new TbInstitutionCourse($idcourse,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5]); 
					$institutioncourses[]=$objinstitutioncourse->getList($row[6]);
				}
			
			return $institutioncourses;
		}
		
		public function insertCourseInstitution($idcourse,$idinstitution,$section,$cupo,$periodo,$anio)
		{
			if($this->objconn->prepared("INSERT_COURSEINSTITUTION","SELECT * from f_insertcourseinstitution($1,$2,$3,$4,$5,$6);"))
			{	
				$result=$this->objconn->ejecuteStatement("INSERT_COURSEINSTITUTION",array($idcourse,$idinstitution,$section,$cupo,$periodo,$anio));
				$row = $this->objconn->getRow($result,0);
				return $row[0];
			}
		}
		
		public function updateInstitutionCourse($idcourse,$idinstitutionh,$sectionh,$periodoh,$anioh,$idinstitution,$section,$periodo,$anio,$state,$cupo)
		{
			if($this->objconn->prepared("UPDATE_COURSEINSTITUTION","SELECT * from f_updateinstitutioncourse($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11);"))
			{	
				
				$result=$this->objconn->ejecuteStatement("UPDATE_COURSEINSTITUTION",array($idcourse,$idinstitutionh,$sectionh,$periodoh,$anioh,$idinstitution,$section,$periodo,$anio,$state,$cupo));
				$row = $this->objconn->getRow($result,0);
				//$objcourse->setIdCourse($row[1]);
				return $row[0];
			}
		}
		
		public function activateInstitutionCourse($idcourse,$idinstitution,$section,$periodo,$anio,$state)
		{
			if($this->objconn->prepared("UPDATE_COURSEINSTITUTION","SELECT * from f_updateinstitutioncourse($1,$2,$3,$4,$5,$6);"))
			{	
				$result=$this->objconn->ejecuteStatement("UPDATE_COURSEINSTITUTION",array($idcourse,$idinstitution,$section,$periodo,$anio,$state));
				$row = $this->objconn->getRow($result,0);
				//$objcourse->setIdCourse($row[1]);
				return $row[0];
			}
		}
		
		public function getInstitutionCourses($idinstitution,$periodo,$anio){
			$query = 	"SELECT c.idcourse, c.name, s.section, u.name||' '||u.surname catedratico, to_char(s.startdate,'DD/mon/YYYY') || ' al ' || to_char(s.enddate,'DD/mon/YYYY') vigencia "; 
			$query .=	"FROM tbuser u, tbcourse c, tbinstitutioncourse ic, tbschedule s ";
			$query .=	"WHERE ic.idcourse = c.idcourse ";
			$query .=	"AND ic.idcourse = s.idcourse ";
			$query .=	"AND ic.section = s.section ";
			$query .=	"AND ic.periodo = s.periodo ";
			$query .=	"AND ic.anio = s.anio ";
			$query .=	"AND s.iduser = u.iduser ";
			$query .= 	"AND ic.state = 1 ";
			$query .=	"AND ic.idinstitution = ".$idinstitution." ";
			$query .=	"AND ic.periodo = ".$periodo." ";
			$query .=	"AND ic.anio = ".$anio." ";
			$query .=	"AND current_date < s.startdate ";
			$query .= 	"ORDER BY 1,2;";
			$result=$this->objconn->ejecuteQuery($query);
				while($row = $this->objconn->getResult($result))
				{ 
					$objsection=new TbSection($row[0], $row[1], $row[2], $row[3], $row[4]); 
					$sections[]=$objsection->getObjects();
				}
			
			return $sections;
			
		}
		
	}
?>