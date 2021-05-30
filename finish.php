<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/language/phpmailer.lang-ja.php';

$mail = new PHPMailer(true);
try {
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->CharSet = 'UTF-8';
$mail->SMTPAuth = true;
$mail->Username = 'kouki032812@gmail.com';
$mail->Password = 'ohvjdvqlvvqrlktn';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('kouki032812@gmail.com', 'ひねもす珈琲');
$mail->addAddress($email, $name.'様');

$mail->Subject = 'お問い合わせを承りました。';
$mail->Body = 'この度はお問い合わせありがとうございます。お問い合わせを承りました。'."\n".'お問い合わせ内容：'.$message;

$mail->send();
} finally {
}
