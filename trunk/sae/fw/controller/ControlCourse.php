<?php

   	require_once("Control.php");
 	require_once("../model/ServiceQuery.php");
	require_once("../model/mapping/TbCourse.php");
	
	class ControlCourse extends Control
	{  
		private $objservice; 
		private $objcourse;
		
		public function ControlCourse($name,$description,$idinstitution,$duration,$state)
		{  
			$this->objservice=new ServiceQuery();
			$this->objcourse=new TbCourse(null,$name,$description,$duration,$idinstitution,null);
			$this->objcourse->setState($state);	
		
		}
		
		public function setCourse($objcourse)
		{
			$this->objcourse=$objcourse;
		}
		
		public function getCourse()
		{
			return $this->objcourse;
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
		
		public function getCourses()
		{
			return json_encode($this->objservice->getCourses());
		}
		
		public function insertCourse()
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
		
	} 

?>