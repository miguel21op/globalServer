<?php

include "smsGateway.php";
$smsGateway = new SmsGateway('miguel21op@live.com.pt', 'crystalsW33');

$deviceID = 554;
$number = '+351938341556';
$message = 'Este é um envio';

$result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);

?>