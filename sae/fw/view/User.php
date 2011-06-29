<?php  
require_once("../controller/ControlUser.php");
require_once("validator/Validator.php");
require_once("validator/ValidatorCaptcha.php");

$mail = $_REQUEST['id_mail'];
$valmail=new ValidatorMail('Correo',$mail,true);
$valmail->setTypeMail(true);

$password = $_REQUEST['id_password'];
$passcomp = $_REQUEST['id_pass_comp'];
$valpassword=new ValidatorPassword('Contraseña',$password,true);
$valpassword->setMin(5);

$id = $_REQUEST['id_id'];
$valid=new ValidatorDefault('DPI o Cedula',$id,false);

$name = $_REQUEST['id_name'];
$valname=new ValidatorDefault('Nombre',$name,true);

$surname = $_REQUEST['id_surname'];
$valsurname=new ValidatorDefault('Surname',$surname,true);

$address = $_REQUEST['id_address'];
$valaddress=new ValidatorDefault('Direccion',$address,true);

$gender = $_REQUEST['id_gender'];
$valgender=new ValidatorInteger('Genero',$gender,true);

$school = $_REQUEST['id_school'];
$valschool=new ValidatorInteger('Escolaridad',$school,true);

$birthdate= $_REQUEST['id_birthdate'];
$valbirthdate=new ValidatorDate('Fecha',$birthdate,true);

$phone= $_REQUEST['id_phone'];
$valphone=new ValidatorInteger('Telefono',$phone,false);
$valphone->setMin(8);

$celular= $_REQUEST['id_celular'];
$valcelular=new ValidatorInteger('Celular',$phone,false);
$valcelular->setTypeInt(true);
$valcelular->setMin(8);

$carnet= $_REQUEST['id_carnet'];
$valcarnet=new ValidatorInteger('Carnet',$carnet,false);
$valcarnet->setMin(4);
$valcarnet->setMax(10);

$unity= $_REQUEST['id_unity'];
$valunity=new ValidatorInteger('Unidad',$unity,false);
$valunity->setMin(2);

$extention= $_REQUEST['id_extention'];
$valextention=new ValidatorInteger('Extension',$extention,false);
$valextention->setMin(2);

$career=$_REQUEST['id_career'];
$valcareer=new ValidatorInteger('Carrera',$career,false);
$valcareer->setMin(2);

$captcha=$_REQUEST['id_captcha'];
$hidcapcha=$_REQUEST['id_hid_captcha'];
$valcaptcha=new ValidatorCaptcha('Captcha',$captcha,$hidcapcha,true);

$service=$_REQUEST['id_page'];


if(
	$valmail->verify() and $valpassword->verify($passcomp) and $valid->verify() and 
   	$valname->verify() and $valsurname->verify() and $valaddress->verify() and 
   	$valgender->verify() and $valschool->verify() and $valbirthdate->verify() and
   	$valcarnet->verify() and $valphone->verify() and $valcelular->verify() and 
   	$valunity->verify() and $valextention->verify() and $valcareer->verify() and $valcaptcha->verify()
  )
{
	$objcontroler=new ControUser($valmail->getField(), md5($valpassword->getField()),$valid->getField(),$valname->getField(),$valsurname->getField(),$valaddress->getField(),$valgender->getField(),$valschool->getField(),$valbirthdate->getField(),$valphone->getField(),$valcelular->getField(),$valcarnet->getField(),$valunity->getField(),$valextention->getField(),$valcareer->getField(),1,null,$service);
	$objcontroler->ejecute();	
}
else
{
	echo json_encode(array('msg'=>$valmail->message.$valpassword->message.$valid->message));
}







?>