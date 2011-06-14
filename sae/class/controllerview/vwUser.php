<?php  
include(".././controllerclass/clrUser.php"); 
include("././controllerclass/clrView.php"); 
$user = intval($_REQUEST['txt_user']);
$password = $_REQUEST['pwd_passoword'];
$id = $_REQUEST['txt_id'];
$name = $_REQUEST['txt_name'];
$address = $_REQUEST['txt_address'];
$gender = $_REQUEST['cb_gender'];
$birthdate= $_REQUEST['dt_birthdate'];
$carne= $_REQUEST['txt_carne'];
$unity= $_REQUEST['txt_unity'];
$extension= $_REQUEST['txt_extension'];
$career=$_REQUEST['txt_career'];
$service=$_REQUEST['lb_page'];
echo "".$user."  ".$service;

$objcontroler=new clrUser($user,$password,$id,$name,$address,$gender,$birthdate,$carne,$unity,$extension,$career,$service);
$objcontroler->ejecute();
?>