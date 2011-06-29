<?php
	
	require_once("../controller/ControlService.php");
	
	$objservice=new ControlService($service);
	echo $objservice->getService();	
?>