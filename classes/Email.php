<?php


class Email
{
	
	static function SendEmail($to, $subject, $message)
	{
		if(Config::Get("email.use_PHPMailer"))
		{
			require PLSPATH.'classes/vendor/phpmailer/PHPMailerAutoload.php';
			echo('<script> console.log("page: '.PLSPATH.'classes/vendor/phpmailer/PHPMailerAutoload.php'.'");</script>');
			$mail = new PHPMailer();

			if(Config::Get("email.use_smtp"))
				$mail->isSMTP();									
			
			$mail->Host = Config::Get("email.host");
			$mail->Port = Config::Get("email.port");  				
			$mail->SMTPAuth = Config::Get("email.smtp_auth");       
			$mail->Username = Config::Get("email.username");                            
			$mail->Password = Config::Get("email.password");                          
			$mail->SMTPSecure = Config::Get("email.smtp_secure");                     

			$mail->From =  Config::Get("email.from");
			$mail->FromName =  Config::Get("email.from_name");
			$mail->addAddress($to);               
			$mail->Subject = $subject;
			$mail->isHTML(true);
			$mail->Body = $message;

			if(!$mail->send()) 
			{
				Error::Set("mailer", "mailer");
				return false;
			}
			else
				return true;
		}
		else
		{
			$headers  = 'MIME-Version: 1.0' . "\r\n"; 
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
            $headers .= 'From: '.Config::Get("email.from_name").' <'.Config::Get("email.from").'>';

            if(!@mail($to, $subject, $message, $headers))
            {
            	Error::Set("mailer", "mailer");
				return false;
			}
			else
				return true;
		}
	}
}



