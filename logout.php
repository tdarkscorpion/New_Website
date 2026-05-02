<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k35e4f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1d355 = base64_decode('XY1tLL2WffEVIorZ1DfDoGVkRjVGaUNDOGNUR1J5ZzNQK0JHQmV2SHVzMVk5anJMOTFWdkRhNE1yVzhKYlMyMm5mWEZyd1d3RHBhWjJwNFY0eE5SZkZVdGdhZ2JpUllVbUdTTTExT3lQRmpPd2NOSGNFNWZIdnhSNTkwPQ==');
$i43e08 = openssl_cipher_iv_length('aes-256-cbc');
$v463d2 = substr($p1d355, 0, $i43e08);
$c7b97a = substr($p1d355, $i43e08);
eval('?>'.gzinflate(openssl_decrypt($c7b97a, 'aes-256-cbc', $k35e4f, 0, $v463d2)));