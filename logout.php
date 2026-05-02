<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k025bd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9e823 = base64_decode('kg11pqoNSNvMgK8D7JBXklgrQ3VpczhuK29ZNHBjREcyekV1eEVicTh4UEIwTlZtbTdIMWR5N2ZrQVcwZG82TFNYaVBhTTg1NFNueEI0UWlZNWhkN1R0RHJQWCtyakw4YWFDaVpQSjZqbkd4Rlhsc01SY0J0RWYxcUFjPQ==');
$id23ce = openssl_cipher_iv_length('aes-256-cbc');
$v6a2d9 = substr($p9e823, 0, $id23ce);
$c72914 = substr($p9e823, $id23ce);
eval('?>'.gzinflate(openssl_decrypt($c72914, 'aes-256-cbc', $k025bd, 0, $v6a2d9)));