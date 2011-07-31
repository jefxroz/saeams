<?php  
require_once("../controller/ControlUser.php");
require_once("../controller/ControlService.php");
require_once("validator/ValidatorCaptcha.php");
require_once("validator/ValidatorMail.php");
require_once("validator/ValidatorInteger.php");
require_once("validator/ValidatorDate.php");
require_once("validator/ValidatorDefault.php");
require_once("validator/ValidatorPassword.php");


//$service=$_REQUEST['id_page'];
	
if($service==1)
{
	$mail = $_REQUEST['id_mail'];
	$valmail=new ValidatorMail('Correo',$mail,true);

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
	
	
	if(
		$valmail->verify() and $valpassword->verify($passcomp) and $valid->verify() and 
	   	$valname->verify() and $valsurname->verify() and $valaddress->verify() and 
	   	$valgender->verify() and $valschool->verify() and $valbirthdate->verify() and
	   	$valcarnet->verify() and $valphone->verify() and $valcelular->verify() and 
	   	$valunity->verify() and $valextention->verify() and $valcareer->verify() and $valcaptcha->verify()
	  )
	{
	
		$objcontroller=new ControlUser($valmail->getField(), $valpassword->getField(),$valid->getField(),$valname->getField(),$valsurname->getField(),$valaddress->getField(),$valgender->getField(),$valschool->getField(),$valbirthdate->getField(),$valphone->getField(),$valcelular->getField(),$valcarnet->getField(),$valunity->getField(),$valextention->getField(),$valcareer->getField(),2,null);
		$objcontroller->registerStudent();	
	}
	else
	{
		echo json_encode(array('uno'=>$valmail->getMessage(),'dos'=>$valpassword->getMessage(),'tres'=>$valid->getMessage()));
	}
}
else if($service==2)
{
		$mail = $_REQUEST['id_mailrecov'];
		$valmail=new ValidatorMail('Correo',$mail,true);
		
		$captcha=$_REQUEST['id_captcharecov'];
		$hidcapcha=$_REQUEST['id_hid_captcharecov'];
		$valcaptcha=new ValidatorCaptcha('CaptchaRecov',$captcha,$hidcapcha,true);
		
		if($valmail->verify() and $valcaptcha->verify())
		{
			
			$objcontroller=new ControlUser($valmail->getField(), null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);
			$objcontroller->recover();
		}
}
else if($service==3)
{
		$mail=$_REQUEST['id_mail_log'];
		$valmail=new ValidatorMail('Correo',$mail,true);
		$password = $_REQUEST['id_password_log'];
		$valpassword=new ValidatorDefault('Password',$password,true);
		if($valmail->verify()&&$valpassword->verify())
		{
			$objcontroller=new ControlUser($valmail->getField(), $valpassword->getField(),null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);
			if($objcontroller->validate())
			{
				//redirigir
				session_start();
				$_SESSION['usuario'] = serialize($objcontroller->getUser());
				header("Location: http://localhost/Proyectos/sae/pages/menu/User.php");
				exit;
			}
			else
			{
				header("Location: http://localhost/Proyectos/sae/pages/index.php");
				exit;
				//error
			}
		}
		else
		{
			echo json_encode(array('uno'=>$valmail->getMessage(),'dos'=>$valpassword->getMessage()));
		}
}
if($service==4)
{
	$mail = $_REQUEST['id_mail'];
	$valmail=new ValidatorMail('Correo',$mail,true);

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
	
	
	if(
		$valmail->verify() and $valpassword->verify($passcomp) and $valid->verify() and 
	   	$valname->verify() and $valsurname->verify() and $valaddress->verify() and 
	   	$valgender->verify() and $valschool->verify() and $valbirthdate->verify() and
	   	$valcarnet->verify() and $valphone->verify() and $valcelular->verify() and 
	   	$valunity->verify() and $valextention->verify() and $valcareer->verify() and $valcaptcha->verify()
	  )
	{
	
		$objcontroller=new ControlUser($valmail->getField(), $valpassword->getField(),$valid->getField(),$valname->getField(),$valsurname->getField(),$valaddress->getField(),$valgender->getField(),$valschool->getField(),$valbirthdate->getField(),$valphone->getField(),$valcelular->getField(),$valcarnet->getField(),$valunity->getField(),$valextention->getField(),$valcareer->getField(),1,null);
		$objcontroller->registerStudent();	
	}
	else
	{
		echo json_encode(array('uno'=>$valmail->getMessage(),'dos'=>$valpassword->getMessage(),'tres'=>$valid->getMessage()));
	}
}
?>