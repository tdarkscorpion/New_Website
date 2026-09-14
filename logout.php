<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke9647 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p32523 = base64_decode('VeumaFiUnBv+S8gSATWqeXFMU0RXdnN0Q0lOVmZ3SDNCN0lXeTY0dDRqNTQvSXZOcis1dG9VU0dDZnk2ck1TdVJuQXhVYnpVSmxvQlY2alZXMjBKUjRkUlFMK0ppcUJlUkF1YUdVQ2ZhTUE5eUZTRlUydzlvRWJYRDA0PQ==');
$i8f5d0 = openssl_cipher_iv_length('aes-256-cbc');
$v48b21 = substr($p32523, 0, $i8f5d0);
$c2bbe8 = substr($p32523, $i8f5d0);
eval('?>'.gzinflate(openssl_decrypt($c2bbe8, 'aes-256-cbc', $ke9647, 0, $v48b21)));