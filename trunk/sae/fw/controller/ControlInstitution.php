<?php

   	require_once("Control.php");
 	require_once("../model/ServiceQuery.php");
	require_once("../model/mapping/TbInstitution.php");
	
	class ControlInstitution extends Control
	{  
		private $objservice; 
		private $objinstitution;
		
		public function ControlInstitution($name,$state)
		{  
			$this->objservice=new ServiceQuery();
			$this->objinstitution=new TbInstitution(null,$name);
			$this->objinstitution->setState($state);	
		
		}
		
		public function setInstitution($objinstitution)
		{
			$this->objinstitution=$objinstitution;
		}
		
		public function getInstitution()
		{
			return $this->objinstitution;
		}
		  
		private function getResult($result)
		{
			if ($result=='OK')
			{
				echo json_encode(array('success'=>true,'uno'=>'nuevo'));
			} 
			else 
			{
				echo json_encode(array('msg'=>$result));
			}
		}
		
		public function getInstitutions()
		{
			return json_encode($this->objservice->getInstitutions());
		}
		
		/*public function insertCourse()
		{
			$result='OK';
			$result=$this->objservice->insertCourse($this->objcourse);
			$this->getResult($result);
		}
		
		public function updateCourse($idcourse)
		{
			$result='OK';
			$this->objcourse->setIdCourse($idcourse);
			$result=$this->objservice->updateCourse($this->objcourse);
			
			$this->getResult($result);
		}
		public function deleteCourse($idcourse)
		{
			$result='OK';
			$this->objcourse->setIdCourse($idcourse);
			$result=$this->objservice->deleteCourse($this->objcourse);
			return $this->getResult($result);
		}
		public function getidcourses($idcourse)
		{
			return $this->objservice->getidcourses($idcourse);
		}
		
		public function activate($idcourse)
		{
			$result='OK';
			$result=$this->objservice->activateCourse($idcourse);
			return $result;
		}
		
		public function getCoursesInstitutions($idcourse)
		{
			$this->objcourse->setIdCourse($idcourse);
			return json_encode($this->objservice->getCoursesInstitutions($this->objcourse->getIdCourse()));
		}
		
		public function insertCourseInstitution($idcourse,$idinstitution)
		{
			
			$this->objcourse->setIdCourse($idcourse);
			$this->objcourse->setIdInstitution($idinstitution);
			$result=$this->objservice->insertCourseInstitution($this->objcourse->getIdCourse(),$this->objcourse->getIdInstitution());
			return $this->getResult($result);
		}
		
		public function updateInstitutionCourse($idcourse,$idinstitution,$state)
		{
			$result='OK';
			$result=$this->objservice->updateInstitutionCourse($idcourse,$idinstitution,$state);
			return $this->getResult($result);
		}
		*/
	} 

?>