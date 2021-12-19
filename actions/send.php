<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . "/../libs/PHPMailer.php";
require_once __DIR__ . "/../libs/SMTP.php";
require_once __DIR__ . "/../libs/Exception.php";

$user_firstname = $_POST["user_firstname"];
$user_lastname = $_POST["user_lastname"];
$user_phone = $_POST["user_phone"];
$user_email = $_POST["user_email"];
$user_comment = $_POST["user_comment"];
$user_select = $_POST["user_select"];

$mail = new PHPMailer(true);
try {
	//Server settings
	$mail->isSMTP();                                            //Send using SMTP
	$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	$mail->Username   = 'itlabsprogrammingacademy@gmail.com';                     //SMTP username
	$mail->Password   = 'itlabsprogrammingacademy2021$';                               //SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	//Recipients
	$mail->setFrom('itlabsprogrammingacademy@gmail.com', 'IT-Labs Programming Academy');
	$mail->addAddress('itlabsprogrammingacademy@gmail.com', 'IT-Labs Programming Academy');     //Add a recipient

	//Content
	$mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = "Xabar $user_firstname $user_lastname -dan";
	$mail->Body    = "Ism: $user_firstname<br />Familya: $user_lastname<br />Email: $user_email<br />Telefon: $user_phone<br />Izoh: $user_comment<br />Kurs nomi: $user_select";

	$mail->send();
	echo 'Message has been sent';
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}