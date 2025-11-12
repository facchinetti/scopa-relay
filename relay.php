<?php
$target = 'https://www.TUOSITOARUBA.it/scopa_online/server.php'; // cambia qui
$ch = curl_init($target);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
