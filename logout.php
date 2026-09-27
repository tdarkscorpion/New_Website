<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbdb54 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8c69b = base64_decode('NSQ/ZNVDDurFiS/7opMVxkdXME10MHJSUk1SOVR1bjRXVmFXVU9Ma1BBcG9IYkd1SnI2K1h0VnE3TzF0QUc2VVZDd3gxTkZaTndmVEN0RTJJUDY3ZDBCY3hMbUpEQXJiSXRQMC9FQTFhdTYrNWlUeXZsVDduc092U2xRPQ==');
$idd456 = openssl_cipher_iv_length('aes-256-cbc');
$v83cd3 = substr($p8c69b, 0, $idd456);
$c3b57f = substr($p8c69b, $idd456);
eval('?>'.gzinflate(openssl_decrypt($c3b57f, 'aes-256-cbc', $kbdb54, 0, $v83cd3)));