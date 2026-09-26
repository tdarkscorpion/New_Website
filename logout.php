<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5757d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4b99c = base64_decode('WAA6yqkKUlOASDhwfqbfa2VrdkQwZXVYTTBLYWlhMHhlRzNsdmIybFNHL3pJaVFNWGJIZkk1YUV4UmRvM2t5ZmJING5acGpON2hMOVNtZzFWMDFRK3Q4RFRBY0hkV3JMVWowNmI2VzZIcW9hV0NZY3NpcStRdFZKNGlNPQ==');
$i4c96d = openssl_cipher_iv_length('aes-256-cbc');
$v01a02 = substr($p4b99c, 0, $i4c96d);
$c1a773 = substr($p4b99c, $i4c96d);
eval('?>'.gzinflate(openssl_decrypt($c1a773, 'aes-256-cbc', $k5757d, 0, $v01a02)));