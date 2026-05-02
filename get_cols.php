<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3deff = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pba784 = base64_decode('ENHdrvP8/FODWeJddzWL+WNTL2NIdEVKbHk1UkxhUlJ1Y2V5bWhnbmZNUVA3UW1HbFA5TUN3czJTU0p3Y0ZiZlFqMzh3d1IxbStadzYvVXhnTEhveFN0ZU1sdGs2TndXaTdSWmIxTnNqb2Ezbkp1ZWNlZGFpbVZsSmpsVWJKdEtoOG9QV0RKQWRNM3U5RUlxUXpOMU5zKzVjYThtQnBmQm1pZWp2aDYxU3hNQVk3ZWNRZzBORHpzcjdxZmtOUHplSFdDWkFjK2RIVGtFa08xV2phcE1YUDU3UitlMnIvWmpGMDllalE9PQ==');
$i5cf98 = openssl_cipher_iv_length('aes-256-cbc');
$v8719b = substr($pba784, 0, $i5cf98);
$c9ae2a = substr($pba784, $i5cf98);
eval('?>'.gzinflate(openssl_decrypt($c9ae2a, 'aes-256-cbc', $k3deff, 0, $v8719b)));