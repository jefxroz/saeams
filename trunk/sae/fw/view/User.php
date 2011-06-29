<?php  
require_once("../controller/ControlUser.php");
require_once("validator/Validator.php");
require_once("validator/ValidatorCaptcha.php");

$mail = $_REQUEST['id_mail'];
$valmail=new Validator('Correo',$mail,true);
$valmail->setTypeMail(true);

$password = $_REQUEST['id_password'];
$passcomp = $_REQUEST['id_pass_comp'];
$valpassword=new Validator('Contraseña',$password,true);
$valpassword->setMin(5);

$id = $_REQUEST['id_id'];
$valid=new Validator('DPI o Cedula',$id,false);

$name = $_REQUEST['id_name'];
$valname=new Validator('Nombre',$name,true);

$surname = $_REQUEST['id_surname'];
$valsurname=new Validator('Surname',$surname,true);

$address = $_REQUEST['id_address'];
$valaddress=new Validator('Direccion',$address,true);

$gender = $_REQUEST['id_gender'];
$valgender=new Validator('Genero',$gender,true);
$valgender->setTypeInt(true);

$school = $_REQUEST['id_school'];
$valschool=new Validator('Escolaridad',$school,true);
$valschool->setTypeInt(true);

$birthdate= $_REQUEST['id_birthdate'];
$valbirthdate=new Validator('Fecha',$birthdate,true);
$valbirthdate->setTypeDate(true);

$phone= $_REQUEST['id_phone'];
$valphone=new Validator('Telefono',$phone,false);
$valphone->setTypeInt(true);
$valphone->setMin(8);

$celular= $_REQUEST['id_celular'];
$valcelular=new Validator('Celular',$phone,false);
$valcelular->setTypeInt(true);
$valcelular->setMin(8);

$carnet= $_REQUEST['id_carnet'];
$valcarnet=new Validator('Carnet',$carnet,false);
$valcarnet->setTypeInt(true);
$valcarnet->setMin(4);
$valcarnet->setMax(10);

$unity= $_REQUEST['id_unity'];
$valunity=new Validator('Unidad',$unity,false);
$valunity->setTypeInt(true);
$valunity->setMin(2);

$extention= $_REQUEST['id_extention'];
$valextention=new Validator('Extension',$extention,false);
$valextention->setTypeInt(true);
$valextention->setMin(2);

$career=$_REQUEST['id_career'];
$valcareer=new Validator('Carrera',$career,false);
$valcareer->setMin(2);

$captcha=$_REQUEST['id_captcha'];
$hidcapcha=$_REQUEST['id_hid_captcha'];
$valcaptcha=new ValidatorCaptcha('Captcha',$captcha,$hidcapcha);

$service=$_REQUEST['id_page'];


if(
	$valmail->validate() and $valpassword->validatePassword($passcomp) and $valid->validate() and 
   	$valname->validate() and $valsurname->validate() and $valaddress->validate() and 
   	$valgender->validate() and $valschool->validate() and $valbirthdate->validate() and
   	$valcarnet->validate() and $valphone->validate() and $valcelular->validate() and 
   	$valunity->validate() and $valextention->validate() and $valcareer->validate() and $valcaptcha->validate()
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