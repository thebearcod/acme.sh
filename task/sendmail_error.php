<?php
require '/home/orenpb/.acme.sh/task/phpmailer/PHPMailerAutoload.php';

$filename='/home/orenpb/.acme.sh/orenpb.ru/orenpb.ru.zip';

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->setFrom('ssl@orenpb.ru', 'Администратор SSL orenpb.ru');
$mail->addAddress('web@orfi.ru', 'web@orfi.ru');
$mail->Subject = 'ERROR: сертификат Let’s Encrypt SSL для домена ORENPB.RU';
$mail->msgHTML("
<b style='color: red;'>Ошибка получения сертификата. Нужно смотреть логи</b><br>
<b>Сертификат Let’s Encrypt SSL для домена ORENPB.RU<b><br>
<a href='https://www.nic.ru/hcp2/sites/orenpb.ru/security'>Установить новый сертефикат</a><br>
<p> Номер договора: 2868523/NIC-D<p>
");
$r = $mail->send();

?>
