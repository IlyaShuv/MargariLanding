<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$subj = $_POST['subject'];

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'bot_website24@mail.ru';
$mail->Password = 'bt24dk&123';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('bot_website24@mail.ru');
$mail->addAddress('wildchild24@mail.ru');
$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта Маргариты Зеленской'
$mail->Body = '' .$name . ' оставил заявку, его телефон '  .$phone. '<br>Цель занятий:' .$subj;
$mail->AltBody = '';

if(!$mail->send()) {
	echo 'Error';
} else {
		header('alert("Спасибо за заявку! Скоро я свяжусь с вами.")');
}
?>
