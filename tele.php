<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$subj = $_POST['subject'];

$token = "450563284:AAEEFsieIUdX3GDERECY93M-wFSXAt3ecpw";
$chat_id = "-242371000";
$arr = array(
	'Имя: ' => $name,
	'Телефон: ' => $phone,
	'Цель занятий: ' => $subj
);

foreach ($arr as $key => $value) {
	$txt .= "<b>".$key."</b> ".$value."%0A"; 
};

$sentToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
	&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
	header('Location: thank-you.html');
} else {
	echo "Error";	
}
?>
