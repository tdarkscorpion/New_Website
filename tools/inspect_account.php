<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke038f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3075d = base64_decode('AJih/yMJ2EvKG66BkThwnGU2SnVoZ3htRFR6TjdtOC9zenFnMUdxblRvalNmTWRqZlVGUDhKSU1DcVA2Q2FsK2ZTYkYwa2JvM0pqay9oc1NWVG5RRytQVy9QOGJ4SmVCTUJMSEgyRS9yeW1JNUZqMysxUDV5QlBhYWZzeS9uWVZ2N2pLQVNocWIvK29jSzhLN0NPRFE4SHkrRDZaYTdmTFpjYVBxMzZoVlVCVHpXaXRhNkdpaXZZY1BRZ2dONEFQcjRCR1FkUXhGa2p2M3VZcQ==');
$i96f73 = openssl_cipher_iv_length('aes-256-cbc');
$v73e95 = substr($p3075d, 0, $i96f73);
$c5f134 = substr($p3075d, $i96f73);
eval('?>'.gzinflate(openssl_decrypt($c5f134, 'aes-256-cbc', $ke038f, 0, $v73e95)));