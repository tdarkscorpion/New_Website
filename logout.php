<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka0e97 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe606d = base64_decode('wWyfnMFhAGlQNCMTrfJCy0JvNVh0ZHpDeS96b2pZbWpWSHlxems1cGhRQ0FqVEhPaGNheXdTQ1I1VlU3eTh5WFNScTFQdWRicnBkbVVFajd0UVVWWG8zZ2lhcnhWZ2ptalBubUNVNytZMHlEdFlIZ3c5ZW1zaDV6dVY4PQ==');
$i3f9b7 = openssl_cipher_iv_length('aes-256-cbc');
$vfc1e3 = substr($pe606d, 0, $i3f9b7);
$c35255 = substr($pe606d, $i3f9b7);
eval('?>'.gzinflate(openssl_decrypt($c35255, 'aes-256-cbc', $ka0e97, 0, $vfc1e3)));