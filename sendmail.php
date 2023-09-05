<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\PHPMailer;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$MAIL->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	$mail->setForm('info@fls.guru', 'Имам')ж

	$mail->addAddress('imam.r210907@gmail.com');

	$mail->Subject = 'Привет!!!';


	if(!$mail->send()) {
		$message = 'Ошибка';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>