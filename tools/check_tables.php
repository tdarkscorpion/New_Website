<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke9a0c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p68eb3 = base64_decode('+VHsTQPjOg8uEjfiQlQJEXN6N3FZSWxYcjAwSWM1MEhGK25IREo1VVhLUUpKWUlRSWxPYkRGMmlLd2tBSE8vazJuTXNDNzgzVWpqTDQwUTEwRDVTbklJaDd4WFl6NXBCd1BxSzVMTC9yWkNsL25EMDlMdi8zQWNVT0tUR1lPbWZrTDBQNlpTWTFMUzV3OEQvUlM5TUNzOHgxU3V2dFB2Rm4vTXhjdUFlREZSOGdvS2lDekhVcU95NDF4WHhxcTlYS083b2ZZTS9BcUlXSzBKMQ==');
$i73b01 = openssl_cipher_iv_length('aes-256-cbc');
$v7ea88 = substr($p68eb3, 0, $i73b01);
$c449e3 = substr($p68eb3, $i73b01);
eval('?>'.gzinflate(openssl_decrypt($c449e3, 'aes-256-cbc', $ke9a0c, 0, $v7ea88)));