<?php
	
	require_once("../controllerclass/clrService.php");
	
	$objservice=new clrService($service);
	echo $objservice->getService();	
?>