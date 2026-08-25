<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k708b4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcc43a = base64_decode('22qXn7jIzDEesf0KNiJb+2lyMzIwbDFqcGlvTm9RU210RVFXV044TVN0OEgwNVJDZW5YTHNiQmFiUUQyRGJBUm81QzB0WjlxOHZKVXloeDlpNXVSSnZXWkVGMkxjTUQ5V1J1d3VTOHU5YnphemFKWmR1ck9nTVJNM3d3PQ==');
$ib3dc6 = openssl_cipher_iv_length('aes-256-cbc');
$v5dbd6 = substr($pcc43a, 0, $ib3dc6);
$c46942 = substr($pcc43a, $ib3dc6);
eval('?>'.gzinflate(openssl_decrypt($c46942, 'aes-256-cbc', $k708b4, 0, $v5dbd6)));