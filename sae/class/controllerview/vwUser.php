<?php  
include(".././controllerclass/clrUser.php"); 
include("././controllerclass/clrView.php"); 
$id = intval($_REQUEST['id']);
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];


$objcontroler=new clrUser()

?>