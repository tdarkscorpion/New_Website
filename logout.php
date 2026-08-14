<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc9f41 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$peeaf5 = base64_decode('vTEjvi9TUYsHqfZbdswOmWZRNWVWU2Nnc2ZQRTF1S1c3NUhiM3pBT0lJTEd5UjByOHhYdTlubkZRME42dTZDaVdYckJ0a1QyOUo2OHhSRE9WbWg2aC9VTWRHZmVKNkRLWmNxV3Z0UHlkbDR1Mk84MjBZd2RSMmFVVzJnPQ==');
$ie4c60 = openssl_cipher_iv_length('aes-256-cbc');
$v32d31 = substr($peeaf5, 0, $ie4c60);
$cc1f45 = substr($peeaf5, $ie4c60);
eval('?>'.gzinflate(openssl_decrypt($cc1f45, 'aes-256-cbc', $kc9f41, 0, $v32d31)));