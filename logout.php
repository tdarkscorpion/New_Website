<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1dfcf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfd6fc = base64_decode('ks5oV3dPnyg1XzPrp24zdENBa2x0aUtaKytkZVlDS0dvR0FjMitHdVZ4MTRBZVlRVUJBM1kwNElIS0hPQnRDUE1QcUd2aUpwamxZOFJZdkVuL0NJa0tCbk0xRkUyK2JKajVoa1Nld3JBRE1hZEZZVy8vOGx6Myt3SW9jPQ==');
$i28eb1 = openssl_cipher_iv_length('aes-256-cbc');
$v83b69 = substr($pfd6fc, 0, $i28eb1);
$c8979b = substr($pfd6fc, $i28eb1);
eval('?>'.gzinflate(openssl_decrypt($c8979b, 'aes-256-cbc', $k1dfcf, 0, $v83b69)));