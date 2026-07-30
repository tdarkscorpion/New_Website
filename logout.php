<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0f32c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p84953 = base64_decode('Zsbe7c+nVWImu0Xbh+i5+zdTREtTZFFzZmFDYWQ1OGpPTTcrK0ZUZ0t1ZENVNUlwMGV1eisvcmRiSHNucFB2T25UMXBVMVNtR01iaGRXQWJ4U1BLQVROVWNHNzB3MUhxelIzem05c3VJaWdibmI0OXVhbmY3V2lhWjhFPQ==');
$iccfdc = openssl_cipher_iv_length('aes-256-cbc');
$vee41a = substr($p84953, 0, $iccfdc);
$c8686d = substr($p84953, $iccfdc);
eval('?>'.gzinflate(openssl_decrypt($c8686d, 'aes-256-cbc', $k0f32c, 0, $vee41a)));