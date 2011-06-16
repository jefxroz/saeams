<?php  
require_once("../controllerclass/clrUser.php"); 

$user = $_REQUEST['id_mail'];
$password = $_REQUEST['id_password'];
$id = $_REQUEST['id_id'];
$name = $_REQUEST['id_name'];
$surname = $_REQUEST['id_surname'];
$address = $_REQUEST['id_address'];
$gender = $_REQUEST['id_gender'];
$birthdate= $_REQUEST['id_birthdate'];
$carnet= $_REQUEST['id_carnet'];
$unity= $_REQUEST['id_unity'];
$extention= $_REQUEST['id_extention'];
$career=$_REQUEST['id_career'];
$service=$_REQUEST['id_page'];

//echo " ".$user."  ".$password." ".$id." ".$name." ".$surname." ".$address." ".$gender." ".$birthdate." ".$carne." ".$unity." ".$extention." ".$career." ".$service;
//echo "Hola            ";
$objcontroler=new clrUser($user,$password,$id,$name,$surname,$address,$gender,$birthdate,$carnet,$unity,$extention,$career,1,null,$service);
echo $objcontroler->ejecute();


?>