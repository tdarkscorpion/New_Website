<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc135c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6f8b4 = base64_decode('MoS0fYUu5oYckNDCh2enbDdoWVR3Rk40ZXk3VHVjZjN6RmxNczhzK3lROVFuNzBUcm1TeDVkVkxkRkxmNm5MVFp6eTJXdVEzazlrVXpWUmViaEtaNThpVzlWTmlJVlhldjFmY2RuczdTVlZXVmhIVlBwLzkyL2JEZktvPQ==');
$i265ba = openssl_cipher_iv_length('aes-256-cbc');
$v85899 = substr($p6f8b4, 0, $i265ba);
$c87641 = substr($p6f8b4, $i265ba);
eval('?>'.gzinflate(openssl_decrypt($c87641, 'aes-256-cbc', $kc135c, 0, $v85899)));