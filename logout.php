<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbfc94 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8f5c6 = base64_decode('C+UAQgUQTm4Jl9MtubQJ7HdyVWRHZW9HY1VRaHZYM2N5YVY4ZWZZUDVpOUdNWTk2cHRGN2loM216dmtZaDBROWJOSkNxZEZ2ZEpEajM4NVhpdWxyVjYzSFZURlN4NXc3UXVZT21DUVRCckpnQWIxR2EyMDNORVVEQnFJPQ==');
$ib44ef = openssl_cipher_iv_length('aes-256-cbc');
$v604cf = substr($p8f5c6, 0, $ib44ef);
$c755b3 = substr($p8f5c6, $ib44ef);
eval('?>'.gzinflate(openssl_decrypt($c755b3, 'aes-256-cbc', $kbfc94, 0, $v604cf)));