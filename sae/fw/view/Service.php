<?php
	
	require_once("../controller/ControlService.php");
	
	$objservice=new ControlService($service);
		
	
	if($service=='getcaptcha')
	{
		echo $objservice->getCaptcha();
	}
	else if($service=='getschool')
	{
		echo $objservice->getSchool();
	}
	else if($service=='activate')
	{
		if( $codegenerate == md5('getIdUser('.$code.')') )
		{
			echo $objservice->Activate($code, $activatekey);
		}
	}
	else if($service=='recover')
	{
		if( $codegenerate == md5('getIdUser('.$code.')') )
		{
			echo $objservice->ActivateRecover($code, $activatekey,$password);
		}
	}
	else if($service=='logout')
	{
		session_start();
		session_destroy();
		header("Location: http://localhost/Proyectos/sae/pages/index.php");
	}
	else if($service=='getinstitution')
	{
		echo $objservice->getInstitution();
	}
	else if($service=='getstatecourse')
	{
	
		echo $objservice->getCourseStates();
	}
	
	
	
?>