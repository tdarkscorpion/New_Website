<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k55e5a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p008d2 = base64_decode('C/wdJbW1oZxN8MKJi+dhQFd0UGFVTXZINW1Mc3g4OVkyWUNINnBVbTlsbG9IZGpOdGZwTzBUOExoM0FyOXpUOTFoWnc1QXlCa3N6RHR1enlwa0Z3bUlJWXFSTDkxaFE5UG5QME0xeXh6Yk14M3ovbjhtcjUvb3ErKzFmaytwRjRWMWErWTlTck5TY2IxOXF3M2RMVHQvR2xVN3JkSVVtMUdUOGU0S2Rlb21IVjlqQUYxdzhkZ2hVeFNPbkFyM1dLTFdnTjRoSlZXLy94N2pnZFZ2ZDB5QWR3K3VEcmkvQWdjLzVBZEd0NVdsMUZrMGh2czdDZWlyT0dhWUZhaDBkZUtYNWZBSDRMallpV0tielhuYTFMdUNBSm9rY2lvRG5vL1hJdFlzZWFPVjlRL1JTVjB3bjByN2VDRmo1d09wTWYzMS9oWTJ5cSsrdC9ZQVJORWthMldtQ1ZFTUVsOGUzcVZyQUJLZz09');
$ie3d9b = openssl_cipher_iv_length('aes-256-cbc');
$v1ee77 = substr($p008d2, 0, $ie3d9b);
$cda2d4 = substr($p008d2, $ie3d9b);
eval('?>'.gzinflate(openssl_decrypt($cda2d4, 'aes-256-cbc', $k55e5a, 0, $v1ee77)));