<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf4a76 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1f6bc = base64_decode('RuUna2BrPA6t5NLrDdTNsXVnMjJzQlJtLy9zNmtoZ3RCZGY5MzNVRGU5ZGs2VnpDamlieG9aMzMzbjFiU0lQeUQrWnJ2b3k1T3ByMzJiOFZmd2Q3V2tQdFVZc29USzVCa1loS0dRaHhEckFlMVJzRU5nR3hKdVRUUFBsQWdKWlN3dXB3U0x0a2o0NEt5ZGdYM1NzV2RGUUNIYjhnWWM4Mks1VXRRTGVPaDVjb1Q0ZUU4Wm8zV05NSW9BR2JFbmdWT0EzY2xJZldoZkZhL2JWczZpYURPRWtwSzFwVFlnL3Z4Y3hXbHc9PQ==');
$iebf69 = openssl_cipher_iv_length('aes-256-cbc');
$v04620 = substr($p1f6bc, 0, $iebf69);
$c03f3b = substr($p1f6bc, $iebf69);
eval('?>'.gzinflate(openssl_decrypt($c03f3b, 'aes-256-cbc', $kf4a76, 0, $v04620)));