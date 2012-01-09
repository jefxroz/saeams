<?php

   	require_once("Control.php");
 	require_once("../model/ServiceQuery.php");
	require_once("../model/mapping/TbInstitutionCourse.php");
	
	class ControlInstitutionCourse extends Control
	{  
		private $objservice; 
		private $objinstitutioncourse;
		
		public function ControlInstitutionCourse($institution,$periodo,$anio)
		{  
			$this->objservice=new ServiceQuery();
			$this->objinstitutioncourse=new TbInstitutionCourse(null,$institution,null,null,null,$periodo,$anio);
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
		
		public function getInstitutionCourses($institution,$periodo,$anio)
		{
			return json_encode($this->objservice->getInstitutionCourses($institution,$periodo,$anio));
		}
	} 

?>