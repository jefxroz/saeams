<?php
	require_once("Mail.php");
	
	class MailerRecover extends Mail
	{      
		private $destinationmail; 
		private $linkactivate;
		private $objuser;
		private $link;
		private $subject;
		private $message;
		private $messagetxt;
		
		public function MailerRecover($objuser)
		{  
			$this->Mail();
			$this->destinationmail    = $objuser->getMail();
			$this->objuser=$objuser;
			$this->setLink();
			$this->setSubject();
			$this->setMessage();
			$this->setMessageTxt();
		}
		
		private function setLink()
		{
			$path="http://localhost/Proyectos/sae/fw/view/";
			$this->link=$path."Service.php?service=recover&password=".$this->objuser->getPassw()."&code=".$this->objuser->getIdUser()."&codegenerate=".md5('getIdUser('.$this->objuser->getIdUser().')')."&activatekey=".$this->objuser->getActivateLink()."";
		}
		
		public function getLink()
		{
			return $this->link;
		}
		
		private function setSubject()
		{
			$this->subject = "".$this->objuser->getName()."   ".$this->objuser->getSurName().", Datos de su solicitud de nuestro servicio Recuperar Contraseña SAESAP, guarde este email.";		
		}
		
		public function getSubject()
		{
			return $this->subject;
		}
		
		private function setMessage()
		{
			$mail=$this->objuser->getMail();
			$this->message          = '<table width="629" border="0" cellspacing="1" cellpadding="2">
 <tr>
   <td width="623" align="left"></td>
 </tr>
 <tr>
   <td bgcolor="#00008B"><div style="color:#FFFFFF; font-size:14; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase; font-weight: bold;">  Buenas, a pedido suyo su contraseña ha sido reseteada, estos son sus nuevos datos de registro, '.$mail.'</div></td>
 </tr>
 <tr>
   <td height="95" align="left" valign="top"><div style=" color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-bottom:3px;"> USUARIO: '.$mail.'</strong><br><br><br>
         <strong>SU CLAVE : </strong>'.$this->objuser->getPassw().'</strong><br><br><br>
         <strong>SU LINK DE ACTIVACION:<br><a href="'.$this->link.'">'.$this->link.' </strong></a><br><br><br>
         <strong>POR FAVOR HAGA CLICK EN LINK DE ARRIBA PARA RESETEAR SU CONTRASEÑA Y ACTIVAR LA QUE SE LE HA ENVIADO</strong><br><br><br>
         <strong>SI EL LINK NO FUNCIONA ALA PRIMERA INTENTELO UNA SEGUNDA, EL SERVIDOR A VECES TARDA EN PROCESAR LA PRIMERA ORDEN</strong><br><br><br>         
         <strong>GRACIAS POR REGISTRARSE EN SAESAP.</strong><br><br><br>
         <strong></strong><br><br><br>
         <strong></strong><br><br><br>
         <strong>NO RESPONDA A ESTE CORREO</strong><br><br><br>
   </div>
   </td>
 </tr>
</table>';
		}
		
		public function getMessage()
		{
			return $this->message;
		}
		
		private function setMessageTxt()
		{
			$mail=$this->objuser->getMail();
			$this->messagetxt          = 'SU CLAVE : '.$this->objuser->getPassw().'\n
         SU EMAIL : '.$mail.'\n
         SU LINK DE ACTIVACION:"'.$this->link.'\n
         POR FAVOR HAGA CLICK EN LINK DE ARRIBA PARA RESETEAR SU CONTRASEÑA Y ACTIVAR LA QUE SE LE HA ENVIADO\n
         SI EL LINK NO FUNCIONA ALA PRIMERA INTENTELO UNA SEGUNDA, EL SERVIDOR A VECES TARDA EN PROCESAR LA PRIMERA ORDEN\n
         GRACIAS POR REGISTRARSE EN SAESAP.';
		}
		
		public function getMessageTxt()
		{
			return $this->messagetxt;
		}
			
		public function sender()
		{
			return $this->send($this->objuser->getMail(),$this->objuser->getName(),$this->objuser->getSurName(),$this->getSubject(),$this->getMessage(),$this->getMessageTxt(),&$result);
		}
		
		
	}
?>