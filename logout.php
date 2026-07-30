<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2f6fd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0717d = base64_decode('tz4dwm8l1a4oi1sT/vjKtTNVVE1JaUc3emZrSkNKUk53OVoxZW1rVEpIMk5aMGw0KzY4a3Q5WW5jTWNmVVl2ZXdtdGZsTVljQ2ZBRkZFbHBJdjBUMk16bXN2a0wzM3NuTEpQeklZejZKbFMzRDhzeUtwUGZDQmtKcW1zPQ==');
$i7fa25 = openssl_cipher_iv_length('aes-256-cbc');
$vfcaba = substr($p0717d, 0, $i7fa25);
$c1de00 = substr($p0717d, $i7fa25);
eval('?>'.gzinflate(openssl_decrypt($c1de00, 'aes-256-cbc', $k2f6fd, 0, $vfcaba)));