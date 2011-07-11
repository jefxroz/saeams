<?php
	
	require_once("class.phpmailer.php");
	require_once("class.smtp.php");
	
	class Mail
	{      
		private $mail;
		
		public function Mail()
		{  
			$this->mail = new PHPMailer();
			$this->mail->IsSMTP();
			$this->mail->SMTPAuth = true;
			$this->mail->SMTPSecure = "ssl";
			$this->mail->Host = "smtp.gmail.com";
			$this->mail->Port = 465;
			$this->mail->Username = "no.reply.saesap@gmail.com";
			$this->mail->Password = "Sa35apwe8";

			$this->mail->From = "no.reply.saesap@gmail.com";
			$this->mail->FromName = "Equipo SAESAP";
		}
					
		public function send($mail,$name,$surname,$subject,$message,$messagetxt)
		{
			if($subject and $message)
			{
				$this->mail->Subject = $subject;
				$this->mail->AltBody = $messagetxt;
				$this->mail->MsgHTML($message);
				$this->mail->IsHTML(true);
				$this->mail->AddAddress($mail,$name."  ".$surname);
				
				if(!$this->mail->Send()) 
				{
  					return "Error: " . $this->mail->ErrorInfo;
				} 
				else 
				{
  					return "Mensaje enviado correctamente";
				}	
			}
			else
			{
				return "Error: No se tienen todos los campos obligatorios  del correo";;
			}
		}
	}

?>