<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9aa9e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p459b2 = base64_decode('0f/Rt7dO5oMyIm8hPYMrv3JPSGdVT0lVS0RNcVFCZS82ZFZUbXlsREh6ZU56YVB6eXdReWRQaWZxQ3AvWGxyN2VyWVBORjZjbEUvVDJacWJmWEV1S2l0TWNTYnd4NWd4Z0JLbmx4SHdLMHpNYndRaUpoNWNnUXEyYjZVPQ==');
$i57fa9 = openssl_cipher_iv_length('aes-256-cbc');
$v6645b = substr($p459b2, 0, $i57fa9);
$c66144 = substr($p459b2, $i57fa9);
eval('?>'.gzinflate(openssl_decrypt($c66144, 'aes-256-cbc', $k9aa9e, 0, $v6645b)));