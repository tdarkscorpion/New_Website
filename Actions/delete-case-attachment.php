<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k89057 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3fe24 = base64_decode('SQ0YiSXVeqtEev/NJz25uUt5SWZDbVhtZ1BERFdFR2wrV3cvSFJsR0k5K2pYYk05YVp6T2x6Vzd0UjhBR01FUUdYZUxEVmVFL2ZOeENyS1gwaG5xQUs5ZHEyMi8za1lIUkp4Y2hYbWFiSkFyWkVrRzZMMVJ3UTJZRm4xSjdqSzRLeWRkdkRwUGg5OGZnRmlXbm5jN2MwdEdDWGs2TmRhUHFKM0Jxc3hUQmUwRnJhZ0d4Zk5rT01NdGhvRWVDZDVRUXEvMFFqQy9EZWt3aGxHS1BYY0Y3T1JpM2FadjliYVBMODMyb2wxY011LzlJK3NUZEgvYkluVUw1RjEvYWIrWkxtcU5EMUZxOTdTMk1hUzZ2NnhyOTRXOEUrejJzQ3Q5THhlU2V0Ry9abEo0UGJvVGFvQVF2UUltUzg2a3ZpVGVxZ0hSdk9zTDVNMThZMm80');
$i3ad09 = openssl_cipher_iv_length('aes-256-cbc');
$v20696 = substr($p3fe24, 0, $i3ad09);
$ce6cd2 = substr($p3fe24, $i3ad09);
eval('?>'.gzinflate(openssl_decrypt($ce6cd2, 'aes-256-cbc', $k89057, 0, $v20696)));