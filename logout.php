<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0091a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa3fb2 = base64_decode('JJ2dH1/Cwhji0ry0LEyfRHZ3TUFFaWNKQ2ZjWmxnb2QrV2Fma052OFBUbzdZRDREbjhSb0pYd3FvdWYveU92aUpON1NXai9hNENta2JBM0N2eHY2eGJIM1ZUZGZUWXByd0Z3RHRPZjZ0OFRMTlZILzVZMnF5ZDhCbW1jPQ==');
$i93c5d = openssl_cipher_iv_length('aes-256-cbc');
$v84bd6 = substr($pa3fb2, 0, $i93c5d);
$c515a0 = substr($pa3fb2, $i93c5d);
eval('?>'.gzinflate(openssl_decrypt($c515a0, 'aes-256-cbc', $k0091a, 0, $v84bd6)));