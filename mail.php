<?php
ini_set('display_errors',1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "vendor/autoload.php";
$mailer = new PHPMailer();
$mailer->SMTPDebug = SMTP::DEBUG_SERVER;
$mailer->isSMTP();
$mailer->addAddress('balashovaa508@gmail.com', 'Joe User');
$mailer->Host = 'mail.aurumgroup.com.ua';
$mailer->SMTPAuth = true;
$mailer->Username = 'php@aurumgroup.com.ua';
//$mailer->Password = getenv('SMTP_PASSWORD');
$mailer->Password = '29012020';
$mailer->SMTPSecure = 'tls';
$mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mailer->Port = 587;
$mailer->setFrom('balashovaa508@gmail.com', 'Robot');
$mailer->isHTML(true);
$mailer->Subject = 'Тема письма';
$mailer->Body  = '
    <h1>HTML версия письма</h1>
    <p>Это абзац</p>
    <p>
        <a href="https;//google.com">это ссылка</a>
    </p>';
$mailer->Timeout = 5;
$mailer->CharSet = 'UTF-8';
if ($mailer->send()) {
    echo 'Отправлено';
} else {
    echo 'Не отправлено';
}