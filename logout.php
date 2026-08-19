<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kacb2a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p18a8b = base64_decode('/dq8kYh1Bx/51mox4BVEwklEcWhWQlNJRDV2blpYdWlOZm5hWjA0VHRPeStxcFdhVUNuOGluZUVPeUJrY2w0VC9zZzVOcDFKbmZjWmRIWTdDWnZ6QzNrYjVwcSt5R1B2UHNsRVE2ZVFvMmErOWRXREJXME9zSmNVVzh3PQ==');
$ie0d1a = openssl_cipher_iv_length('aes-256-cbc');
$v9ec6b = substr($p18a8b, 0, $ie0d1a);
$c61894 = substr($p18a8b, $ie0d1a);
eval('?>'.gzinflate(openssl_decrypt($c61894, 'aes-256-cbc', $kacb2a, 0, $v9ec6b)));