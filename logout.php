<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k29f39 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p52d4a = base64_decode('YyXSQ2zXCtVTvNUwRSxGhnMyQ2VXcGFScXhZNGNyc0V3Ui9HT0drVlcyU0VFa3N4bUU0dWVvTWZVZ1kzREJIZzV0MzBwMVpNRzFpQTFiUlA5UXZNWjdXNGNhdFdkNVZ1V2ZDRTEvbkI3cmN2d2djOUxqYXR5VE9QMnVBPQ==');
$i0ec83 = openssl_cipher_iv_length('aes-256-cbc');
$v1162c = substr($p52d4a, 0, $i0ec83);
$c443bf = substr($p52d4a, $i0ec83);
eval('?>'.gzinflate(openssl_decrypt($c443bf, 'aes-256-cbc', $k29f39, 0, $v1162c)));