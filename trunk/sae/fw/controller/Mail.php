<?php
	
	class Mail
	{      
		private $sourcename;
		private $sourcemail;
		private $coypmail;
		private $hiddenmail;
		private $destinationmail; 
		private $linkactivate;
		private $objuser;
		
		public function Mail($objuser)
		{  
			$this->sourcename    = "Equipo de SAE-SAP";
			$this->sourcemail    = "darn1986@gmail.com";
			$this->coypmail      = "darn1986@gmail.com";
			$this->hiddenmail    = "darn1986@gmail.com";
			$this->destinationmail    = $objuser->getMail();
			$this->objuser=$objuser;
			
		}
		
		private function getLink($service,$password)
		{
			$path="http://localhost/Proyectos/sae/fw/view/";
			$activatelink=$path."Service.php?service=".$service.$password."&code=".$this->objuser->getIdUser()."&codegenerate=".md5('getIdUser('.$this->objuser->getIdUser().')')."&activatekey=".$this->objuser->getActivateLink()."";
			return $activatelink;
		}
		
		private function getSubject($subject)
		{
			$subject = "".$this->objuser->getName()." ".$this->objuser->getSurname().$subject;		
			return $subject;
		}
		
		
		private function getMessageWelcome($activatelink,$password)
		{
			$mail=$this->objuser->getMail();
			$message          = '<table width="629" border="0" cellspacing="1" cellpadding="2">
 <tr>
   <td width="623" align="left"></td>
 </tr>
 <tr>
   <td bgcolor="#2EA354"><div style="color:#FFFFFF; font-size:14; font-family: Arial, Helvetica, sans-serif; text-transform: capitalize; font-weight: bold;"><strong>     Estos son sus datos de registro, '.$mail.'</strong></div></td>
 </tr>
 <tr>
   <td height="95" align="left" valign="top"><div style=" color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-bottom:3px;"> USUARIO: '.$mail.'</strong><br><br><br>
         <strong>SU CLAVE : </strong>'.$password.'</strong><br><br><br>
         <strong>SU EMAIL : </strong>'.$mail.'</strong><br><br><br>
         <strong>SU LINK DE ACTIVACION:<br><a href="'.$activatelink.'">'.$activatelink.' </strong></a><br><br><br>
         <strong>POR FAVOR HAGA CLICK EN LINK DE ARRIBA PARA ACTIVAR SU CUENRA Y ACCEDER A LA PAGINA SIN RESTRICCIONES</strong><br><br><br>
         <strong>SI EL LINK NO FUNCIONA ALA PRIMERA INTENTELO UNA SEGUNDA, EL SERVIDOR A VECES TARDA EN PROCESAR LA PRIMERA ORDEN</strong><br><br><br>
         
         <strong>GRACIAS POR REGISTRARSE EN SAESAP.</strong><br><br><br>
   </div>
   </td>
 </tr>
</table>';
			return $message;
		}
		
		
		private function getMessageRecover($activatelink,$password)
		{
			$mail=$this->objuser->getMail();
			$message          = '<table width="629" border="0" cellspacing="1" cellpadding="2">
 <tr>
   <td width="623" align="left"></td>
 </tr>
 <tr>
   <td bgcolor="#2EA354"><div style="color:#FFFFFF; font-size:14; font-family: Arial, Helvetica, sans-serif; text-transform: capitalize; font-weight: bold;"><strong>  Buenas, a pedido suyo su contraseña ha sido reseteada, estos son sus nuevos datos de registro, '.$mail.'</strong></div></td>
 </tr>
 <tr>
   <td height="95" align="left" valign="top"><div style=" color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-bottom:3px;"> USUARIO: '.$mail.'</strong><br><br><br>
         <strong>SU CLAVE : </strong>'.$password.'</strong><br><br><br>
         <strong>SU EMAIL : </strong>'.$mail.'</strong><br><br><br>
         <strong>SU LINK DE ACTIVACION:<br><a href="'.$activatelink.'">'.$activatelink.' </strong></a><br><br><br>
         <strong>POR FAVOR HAGA CLICK EN LINK DE ARRIBA PARA RESETEAR SU CONTRASEÑA Y ACTIVAR LA QUE SE LE HA ENVIADO</strong><br><br><br>
         <strong>SI EL LINK NO FUNCIONA ALA PRIMERA INTENTELO UNA SEGUNDA, EL SERVIDOR A VECES TARDA EN PROCESAR LA PRIMERA ORDEN</strong><br><br><br>
         
         <strong>GRACIAS POR REGISTRARSE EN SAESAP.</strong><br><br><br>
   </div>
   </td>
 </tr>
</table>';
			return $message;
		}
		
			
		public function send()
		{
			$linkactivate=$this->getLink("activate","");			
			$subject=$this->getSubject(" Datos de registro en SAESAP, guarde este email.");
			$message=$this->getMessageWelcome($linkactivate,$this->objuser->getPassw());
			$this->sendMail($linkactivate,$subject,$message);
  
		}
		public function sendRecover()
		{
			$linkactivate=$this->getLink("recover","&password=".$this->objuser->getPassw());			
			$subject=$this->getSubject(" Datos de su solicitud de nuestro servicio Recuperar Contraseña SAESAP, guarde este email.");
			$message=$this->getMessageRecover($linkactivate,$this->objuser->getPassw());
			$this->sendMail($linkactivate,$subject,$message);
		}
		private function sendMail($linkactivate,$subject,$message)
		{
			$format          = "html";
 			
			//*****************************************************************//
			$headers  = "From: $this->sourcename <$this->sourcemail> \r\n";
			$headers .= "Return-Path: <$this->sourcemail> \r\n";
			$headers .= "Reply-To: $this->sourcemail \r\n";
 
 
			$headers .= "X-Sender: $this->sourcemail \r\n";
 
			$headers .= "X-Priority: 3 \r\n";
			$headers .= "MIME-Version: 1.0 \r\n";
			$headers .= "Content-Transfer-Encoding: 7bit \r\n";
 
			//*****************************************************************//
 
			if($format == "html")
 			{ 
 				$headers .= "Content-Type: text/html; charset=iso-8859-1 \r\n";  
 			}
  			else
    		{ 
    			$headers .= "Content-Type: text/plain; charset=iso-8859-1 \r\n";  
    		}
 			if(@mail($this->destinationmail, $subject, $message, $headers))
 			{
 				echo "Su correo ha sido enviado correctamente";
 			}			
		}
		
		
		
	}

?>