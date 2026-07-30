<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4c021 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcc5d1 = base64_decode('XT8W+FrkYJVDbNwekvjoDExmbUpLK0ExSDJ4YVB2ZjRFM0l0Mjdlb0VKdm91RDNpemcvZDJqNEFhOVh5WFA1WndYTU9PYm5pK3FISk5XMFpQbEt3MWJiK1hWbTBIbEo5RlhJVFdqeXJaL2NFaUdZQ3BKRjNhaWJRNmo4PQ==');
$i00e39 = openssl_cipher_iv_length('aes-256-cbc');
$v4020b = substr($pcc5d1, 0, $i00e39);
$c0c089 = substr($pcc5d1, $i00e39);
eval('?>'.gzinflate(openssl_decrypt($c0c089, 'aes-256-cbc', $k4c021, 0, $v4020b)));