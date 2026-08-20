<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0b7d2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf1366 = base64_decode('po4tpu116aAMPx9S5IWuNjAxN0pGRGVGM2dMSkdQU09mM0w1SkZqRDAzaXJRVGJ4MTNsZjNTcG1kWFhXbXpRMzhIa0lIZTdUOU10M2c4NENkc2g4QWxMU2xOZkxUa1dtL1dWdUdYYWk3b1R0QTdYYVJLTGRSTEpBOS9vPQ==');
$i5fb5e = openssl_cipher_iv_length('aes-256-cbc');
$v386af = substr($pf1366, 0, $i5fb5e);
$c41cfe = substr($pf1366, $i5fb5e);
eval('?>'.gzinflate(openssl_decrypt($c41cfe, 'aes-256-cbc', $k0b7d2, 0, $v386af)));