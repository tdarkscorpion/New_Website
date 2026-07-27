<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1cb60 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa6492 = base64_decode('pkkWWV7csBJBACBhqwpt1ERnT2dxUFR5UklQTkg1NElPSHpnQllNVTdRZGxKbEc0M2FjeWJiL25qb1d0ZzRwOTB1dU1kMXpnWHJBclhXOFp1Yzk1QStqUm1nbG1WWVV4SHNUUU5YKytDOGFXbisyWnJ0UWVnNldoVlJURmZKVjBKZk5nS2c0L2pUZUIwZWJ2eThaTEMvclpOOVFtUnd5ZmY1cXIwdmRkaDB0bE1aVHhwZkxIb09oQ2FNRkRpa0VVc3lMM0FoekpGRVB2NEFsVjNLKzgyQmJ5eWFtVGlqaE96R0M2bXM1YU9tUXZHOW5QR3Q1aTFrOE1IcG1UYnY4RGFRSkZTbzBZWnBLT2F1NzdNckVJVHVjUWN5KzFDc2lOSSs0YjhyaHBwZ3dkM2dDb3hzZXBpemdHcnlJPQ==');
$i692b1 = openssl_cipher_iv_length('aes-256-cbc');
$v2e8d2 = substr($pa6492, 0, $i692b1);
$cb006e = substr($pa6492, $i692b1);
eval('?>'.gzinflate(openssl_decrypt($cb006e, 'aes-256-cbc', $k1cb60, 0, $v2e8d2)));