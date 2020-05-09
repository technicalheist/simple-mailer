# Simple-PHPMailer
- Simple PHP mailer is a sub child of phpmailer function, which can be used to send mail, in a simple manner. 

# Installation 

### Clone / Download the profile from github 

- git clone https://github.com/technicalheist/simple-mailer.git
- cd simple-mailer
- composer install 
- nano test.php 
  ```
  <?php 
	use TechnicalHeist\SimpleMailer\Mail;
  include "src/Mail.php";
  $mail = new Mail(); 
  $data['name'] = "NAME"; 
  $data['email'] = "FROM EMAIL ID HERE";
  $data['host']="SMTP HOST NAME";
  $data['username'] = "USERNAME";
  $data['password'] = "PASSWORD";
  $data['secure']= 'tls';
  $data['port'] = 587;
  $data['to'] = "TO EMAIL ID";
  $data['subject'] = "Simple Mailer Test "; 
  $data['body'] = "This is sent from localhost";
  $status = $mail->sendMail($data);
	var_dump($status);
	```
	
### Installing through Composer 
-  composer require technicalheist/simple-mailer
-  nano test.php

 ```
 <?php 
require_once('vendor/autoload.php');
use TechnicalHeist\SimpleMailer\Mail;
$mail = new Mail();
echo $mail->version();  
$mail = new Mail(); 
$data['name'] = "NAME"; 
$data['email'] = "FROM EMAIL ID HERE";
$data['host']="SMTP HOST NAME";
$data['username'] = "USERNAME";
$data['password'] = "PASSWORD";
$data['secure']= 'tls';
$data['port'] = 587;
$data['to'] = "TO EMAIL ID";
$data['subject'] = "Simple Mailer Test "; 
$data['body'] = "This is sent from localhost";
$status = $mail->sendMail($data);
var_dump($status);
```


   
