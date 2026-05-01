<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5ed26 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p257ac = base64_decode('1aRP6wcd9Q/u4pfYgzyEM2ZGV2tNY2ZBQlpsb0hXN0NnbXdKbDVlS3NnQnM5MEZhc3dFbXB1aDVvYm9Bc3ZGT2FWVjFuSzJyUnNhWkV4a1pkL0NyQ0hqOTc1V05teFhRVnZuc0JOQTlUYjIwdGIxZ3luRkszZy9uQmR3bVVhSXNma3dvR2xRZGFzZTFFTzNDSy9uWFZkTXdwRGkzRVh0MnJ0azBJU2M2ZXkzOGs2U3o2SEVUZDRLcHk5THdPZlBmcUdoOXdDVmw5US9ManliMFAvQ2ZRVHhDU2FmQlFtRVptQ2pyTXpZMXNiUm8vdExpUCsxTWRFK0x4aUlhbTJWZ3d0WEwwZE11OXVYL1REVnJXVEJYblBLSDNOZDVibytRbno2RE9MMmhZMnFkZnNKcUZGcVlEK1Y2MWV3PQ==');
$i0d352 = openssl_cipher_iv_length('aes-256-cbc');
$ve4500 = substr($p257ac, 0, $i0d352);
$ca37d2 = substr($p257ac, $i0d352);
eval('?>'.gzinflate(openssl_decrypt($ca37d2, 'aes-256-cbc', $k5ed26, 0, $ve4500)));