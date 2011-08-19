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
	$name = $_REQUEST['name'];
	$valname=new ValidatorDefault('Nombre',$name,true);

	$description = $_REQUEST['description'];
	$valdescription=new ValidatorDefault('Descripcion',$description,false);

	$institution = $_REQUEST['idinstitution'];
	$valinstitution=new ValidatorInteger('Institucion',$institution,true);

	$duration = $_REQUEST['duration'];
	$valduration=new ValidatorInteger('Duracion',$duration,true);
	
	if($valname->verify() and $valdescription->verify() and $valinstitution->verify() and $valduration->verify())
	{
		$objcontroller=new ControlCourse($valname->getField(), $valdescription->getField(),$valinstitution->getField(),$valduration->getField());
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
	
	if($valname->verify() and $valdescription->verify() and $valinstitution->verify() and $valduration->verify())
	{
		$objcontroller=new ControlCourse($valname->getField(), $valdescription->getField(),$valinstitution->getField(),$valduration->getField());
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


?>
