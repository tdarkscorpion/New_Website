<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9821b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa154a = base64_decode('u0w0u0ToLnvjTz7Is4676mJzMWxZUVMvRDFLS3AwYVpxZHpjZjBoNmFFWnBGdjRtL0w3NkZKVGlHSTYwSkYwekp3UmUvK2lMbkpkbXgvVkIvR05OUTBXM01UblJaWFJiRW9qNVJhSHNPVDBUUTloMGtvQ2JLTHhDdEhVPQ==');
$i5c435 = openssl_cipher_iv_length('aes-256-cbc');
$vad5a9 = substr($pa154a, 0, $i5c435);
$c82aaf = substr($pa154a, $i5c435);
eval('?>'.gzinflate(openssl_decrypt($c82aaf, 'aes-256-cbc', $k9821b, 0, $vad5a9)));