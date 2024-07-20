<?php
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';
require '../phpmailer/Exception.php';

function clear_data($val)
{
	$val = trim($val);
	$val = stripslashes($val);
	$val = stripslashes($val);
	$val = htmlspecialchars($val);
	return $val;
}

$to = 'cfyt9@yandex.ru';
$name = clear_data($_POST['name']);
$surname = clear_data($_POST['surname']);
$tel = clear_data($_POST['tel']);
$email = clear_data($_POST['email']);
$text = clear_data($_POST['message']);


$title = 'Запись на приём';
$body = 'Имя:' . $name . '<br>' .
	'Фамилия:' . $surname . '<br>' .
	'Телефон:' . $tel . '<br>' .
	'E-mail:' . $email . '<br>' .
	'Сообщение:' . $text;

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
$mail->CharSet = 'UTF-8';
$mail->SMTPAuth   = true;
$mail->Host       = 'smtp.yandex.com';
$mail->Username   = 'cfyt9@yandex.ru';
$mail->Password   = 'zcbirpwnpirgvmyd';
$mail->SMTPSecure = 'ssl';
$mail->Port       = 465;

$mail->setFrom('cfyt9@yandex.ru', 'Тестовое задание');

$mail->addAddress('gorgmor7@gmail.com');

$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;
$mail->send('d');

header('location: ../../index.php');
