<?php
namespace TechnicalHeist\SimpleMailer;
require_once('vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail {

    protected $mail; 
	public function __construct()
	{
		$this->mail = new PHPMailer; 
	}


    public function version()
    {
        return '1.0'; 
    }

    public function sendMail($mail_data = null) 
	{
		$this->mail->isSMTP();                                      // Set mailer to use SMTP
		$this->mail->SMTPAuth = true;                               // Enable SMTP authentication
		
		$this->mail->CharSet="iso-8859-1";
		$this->mail->Host = $mail_data['host'];                      // Specify main and backup SMTP servers
		$this->mail->Username = $mail_data['username'];                    // SMTP username
		$this->mail->Password = $mail_data['password'];                           // SMTP password
		$this->mail->SMTPSecure = $mail_data['secure'];                            // Enable TLS encryption, `ssl` also accepted
		$this->mail->Port = $mail_data['port'];    
		$this->mail->SetFrom($mail_data['email'],$mail_data['name'], 0);  
		$this->mail->FromName = $mail_data['name'];
		$this->mail->addAddress($mail_data['to']);
		$this->mail->Subject = $mail_data['subject'];
		$this->mail->Body = $mail_data['body'];
		$this->mail->AltBody = '';
		$this->mail->IsHTML(true);
		 if (!$this->mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $this->mail->ErrorInfo;
            return false; 
        } else {
			$this->mail->ClearAddresses();			
			sleep(1);
            return true;
        }

	}


}