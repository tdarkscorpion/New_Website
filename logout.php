<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8c2c3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p90ed3 = base64_decode('b+MI/8X4+A+hMzz53npx9DRGSUdiNjJ5WVhZZnN0SlJYWThuNVNmK0gyU3RvYW11dElEVW9TRjBNMXFaMHV3VU4vc1RJWFU4dkZqbFpMTjlkY3JBU0xUYzI1cVpTVnNsemQyUDdEM0FWeTV0SGtzakoyVW9VNEpTVmRBPQ==');
$i8a63b = openssl_cipher_iv_length('aes-256-cbc');
$v9136c = substr($p90ed3, 0, $i8a63b);
$c2ada3 = substr($p90ed3, $i8a63b);
eval('?>'.gzinflate(openssl_decrypt($c2ada3, 'aes-256-cbc', $k8c2c3, 0, $v9136c)));