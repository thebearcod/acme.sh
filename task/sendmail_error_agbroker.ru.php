<?php
require '/home/orenpb/.acme.sh/task/phpmailer/PHPMailerAutoload.php';

$filename='/home/orenpb/.acme.sh/agbroker.ru/agbroker.ru.zip';

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->setFrom('ssl@orenpb.ru', 'Администратор SSL agbroker.ru');
$mail->addAddress('web@orfi.ru', 'web@orfi.ru');
$mail->Subject = 'ERROR: сертификат Let’s Encrypt SSL для домена AGBROKER.RU';
$mail->msgHTML("
<b style='color: red;'>Ошибка получения сертификата. Нужно смотреть логи</b><br>
<b>Сертификат Let’s Encrypt SSL для домена AGBROKER.RU<b><br>
<a href='https://www.nic.ru/hcp2/sites/agbroker.ru/security'>Установить новый сертефикат</a><br>
<p> Номер договора: 529522/NIC-D<p>
");
$r = $mail->send();