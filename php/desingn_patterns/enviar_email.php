<?php

require_once 'PHPMailer.php';
require_once 'PHPMailerAdapter.php';

$mail = new PHPMailerAdapter;
$mail->setUseSmtp();
$mail->setSmtpHost('smtp.gmail.com',465);

$mail->setSmtpUser('fgsantos.ti@gmail.com','AnjoLeao');
$mail->setFrom('fgsantos.ti@gmail.com','Felipe Santos');
$mail->addAddress('fgsantos.ti@gmail.com','Felipe Santos');
$mail->setSubject('Oi professor.');
$mail->setHtmlBody('<b>Isso é um <i>teste</i></b>');
$email->send();