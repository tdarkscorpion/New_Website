<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k59c4c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdcfb1 = base64_decode('oxpjEgmp+bUxZR48HbmhdGtOcjlTOXZVZ0FVdFgrNEtLMnliRVZoeHhnT1RQRy9SbEIzTFVUb0F5RjV3eFlTTmNmYzJKOU5DNzgrTUh5N09uVy8vNUo3YXFacFFtK3J5bllYQ29QUkRUOXR6K2U3Q29JekpCWkd5R0owPQ==');
$ie067c = openssl_cipher_iv_length('aes-256-cbc');
$v49999 = substr($pdcfb1, 0, $ie067c);
$c8ea4c = substr($pdcfb1, $ie067c);
eval('?>'.gzinflate(openssl_decrypt($c8ea4c, 'aes-256-cbc', $k59c4c, 0, $v49999)));