<?php
require_once("../controller/ControlInstitutionCourse.php");
require_once("validator/ValidatorInteger.php");
require_once("validator/ValidatorDefault.php");

$institution = $_REQUEST['id'];

if($service==1)
{
	$mes = date('n'); $periodo = 0;
	$anio = date('Y');
	if($mes < 7){
		$periodo = 1;
	}else{
		$periodo = 2;
	}
	$objservice=new ControlInstitutionCourse(null,null,null);
	echo $objservice->getInstitutionCourses($institution,$periodo,$anio);
}
?>