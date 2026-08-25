<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0f276 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf6747 = base64_decode('Ab68JIrtBxWW0y0Rg4fnz2dENEhoWmdxdWFXM0JKY2dmU0dEQUlLOEpTRGlIZDNqRFZQUFI4NTlPR3J1YUQwdzV3L2JadS8xVm9HTVVDUVAxdWFUV0lHRnhvbFladEFWYWU2Wi9rdTJSaHdpNUdUVWZmYWovc1JvMXBRPQ==');
$id3f0a = openssl_cipher_iv_length('aes-256-cbc');
$v2defd = substr($pf6747, 0, $id3f0a);
$cfee62 = substr($pf6747, $id3f0a);
eval('?>'.gzinflate(openssl_decrypt($cfee62, 'aes-256-cbc', $k0f276, 0, $v2defd)));