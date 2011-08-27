<?php
require_once("../controller/ControlCourse.php");
require_once("validator/ValidatorInteger.php");
require_once("validator/ValidatorDefault.php");



if($service==1)
{
	$objservice=new ControlCourse(null,null,null,null);
	echo $objservice->getCourses();
}
else if($service==2)
{
	$name = $_REQUEST['namecourse'];
	$valname=new ValidatorDefault('Nombre',$name,true);

	$description = $_REQUEST['description'];
	$valdescription=new ValidatorDefault('Descripcion',$description,false);

	//$institution = $_REQUEST['cidinstitution'];
	//$valinstitution=new ValidatorInteger('Institucion',$institution,true);

	$duration = $_REQUEST['duration'];
	$valduration=new ValidatorInteger('Duracion',$duration,true);
	
	if($valname->verify() and $valdescription->verify()  and $valduration->verify())
	{
		$objcontroller=new ControlCourse($valname->getField(), $valdescription->getField(),null,$valduration->getField(),null);
		$objcontroller->insertCourse();
	}
	else
	{
		echo json_encode(array('uno'=>$valname->getMessage(),'dos'=>$valdescription->getMessage(),'tres'=>$valinstitution->getMessage(),'cuatro'=>$valduration->getMessage()));
	}
}
else if($service==3)
{
	$idcourse = $_REQUEST['idcourse'];
	$controller=new ControlCourse(null,null,null,null);
	echo json_encode($controller->getidcourses($idcourse));
	
}
else if($service==4)
{
	
	$name = $_REQUEST['namecourse'];
	$valname=new ValidatorDefault('Nombre',$name,true);

	$description = $_REQUEST['description'];
	$valdescription=new ValidatorDefault('Descripcion',$description,false);

	$institution = $_REQUEST['cidinstitution'];
	$valinstitution=new ValidatorInteger('Institucion',$institution,true);

	$duration = $_REQUEST['duration'];
	$valduration=new ValidatorInteger('Duracion',$duration,true);
	
	$state = $_REQUEST['cstate'];
	
	if($valname->verify() and $valdescription->verify()  and $valduration->verify())
	{
		$objcontroller=new ControlCourse($valname->getField(), $valdescription->getField(),null,$valduration->getField(),$state);
		$objcontroller->updateCourse($idcourse);
	}
	else
	{
		echo json_encode(array('uno'=>$valname->getMessage(),'dos'=>$valdescription->getMessage(),'tres'=>$valinstitution->getMessage(),'cuatro'=>$valduration->getMessage()));
	}
}	
else if($service==5)
{
	$objcontroller=new ControlCourse(null, null,null,null);
	$result=$objcontroller->deleteCourse($idcourse);
		
}
else if($service==6)
{
	if($state=='INACTIVO')
	{
		$objcontroller=new ControlCourse(null, null,null,null);
		
		$result=$objcontroller->activate($id);
		header("Location: http://localhost/Proyectos/sae/pages/menu/CourseManagement.php");
		
		
	}	
	else
	{
		header("Location: http://localhost/Proyectos/sae/pages/menu/CourseManagement.php");
			
	}
}
else if($service==7)
{
	$objservice=new ControlCourse(null,null,null,null);
	echo $objservice->getCoursesInstitutions($id);
}
else if($service==8)
{
	$idinstitution=$_REQUEST['cidinstitution'];
	
	$idcourse = $_REQUEST['idcourse'];
	$controller=new ControlCourse(null,null,null,null);
	$controller->insertCourseInstitution($idcourse,$idinstitution);
	
}
else if($service==9)
{
		
	$objcontroller=new ControlCourse(null, null,null,null);
		
	$objcontroller->updateInstitutionCourse($idcourse,$id,'INACTIVO');
		
}
else if($service==10)
{
		
	$objcontroller=new ControlCourse(null, null,null,null);
		
	$objcontroller->updateInstitutionCourse($idcourse,$id,'ACTIVO');
		
}

?>
