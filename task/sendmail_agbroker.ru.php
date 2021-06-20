<?php
require '/home/orfiwww/.acme.sh/task/phpmailer/PHPMailerAutoload.php';

$filename='/home/orfiwww/.acme.sh/agbroker.ru/agbroker.ru.zip';
//$filename='/home/kovi/tmp/kovi.pro.zip';


$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->setFrom('ssl@orfi.ru', 'Администратор SSL agbroker.ru');
$mail->addAddress('web@orfi.ru', 'web@orfi.ru');
$mail->Subject = 'сертификат Let’s Encrypt SSL для домена AGBROKER.RU';
$mail->msgHTML("
<b>Сертификат Let’s Encrypt SSL для домена AGBROKER.RU<b><br>
<a href='https://www.nic.ru/hcp2/sites/agbroker.ru/security/'>Установить новый сертефикат</a><br>
<p> Номер договора: 529522/NIC-D<p>
");
    // Attach uploaded files
$mail->addAttachment($filename);
$r = $mail->send();

?>
