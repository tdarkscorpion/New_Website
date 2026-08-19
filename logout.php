<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k36cb9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p27edb = base64_decode('a82jmj/kbeBqC7gc+EJEsnlBRWxNNjFMQiswRWhlaEpNTHJydmJYa1BNaVgzY2VtdjhDR1pwRGZHTmdiZE10Wm1SaVIrM01XSjhabmdQYi9BWERid0xLTG1RL2gvdkxBbERyUGZrRG1UbjRiWG1WaElQL21LcTVXcm93PQ==');
$i7dcb8 = openssl_cipher_iv_length('aes-256-cbc');
$v645b8 = substr($p27edb, 0, $i7dcb8);
$c5d538 = substr($p27edb, $i7dcb8);
eval('?>'.gzinflate(openssl_decrypt($c5d538, 'aes-256-cbc', $k36cb9, 0, $v645b8)));