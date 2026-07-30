<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5dd9a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf7015 = base64_decode('VH2iH7azWE8B4FU6LIQf6GVRSUFnZi9RSVRwZWNiTm0rYzBXc0hMamdSYUVMYk9hZWp2Q21VQUR6aUtWeElCR1pVbjMwRngwMmlTN0VPb3Izck9Db3F6WmE3ZTQzUS9maW9RSUZuVmFxQlpXK3hVUkRCeUkwWHRxbHpJPQ==');
$i4bf00 = openssl_cipher_iv_length('aes-256-cbc');
$va0aad = substr($pf7015, 0, $i4bf00);
$c102db = substr($pf7015, $i4bf00);
eval('?>'.gzinflate(openssl_decrypt($c102db, 'aes-256-cbc', $k5dd9a, 0, $va0aad)));