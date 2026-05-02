<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0a870 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9b336 = base64_decode('4WY8KrCDBFD+s5eVLIiimFE4TyszSHNzaVJuSkVyZy9QM0p2UXM5VlRWckR6b0J5dmR6emF3WllXaGNibHg4aVJXUHY1NStkYjRPaktYWTk2ZFJZc2pucHZmdDQ5NjBocWc2SGVhdiszK1dxdVo1NE9HclBHODAwemViZDU5akZZYWc4aWNZM0dhb2RSTkNCUU1kcm42UjFDV0c2NVBUa3d5bktFckpWNEZkdkJHUUQyQUkrOU0zWEYwOXluMDFDWGhLMU1SdlA2dUlXbHBZcnVNRHZ5WG9SR09XK3VRWWRWRk1TWTU4MkpjK2tZRDVKRG1JUGtmQ0RyU3dFOVF6Z0U4R1JFN1M1SUxCNkJRZExCOVN6UkkrczBUa2VTNzB5RURBbmpYS2c0OTM5REV2YldUdWZDM21JbiswPQ==');
$i1eaf6 = openssl_cipher_iv_length('aes-256-cbc');
$v942c9 = substr($p9b336, 0, $i1eaf6);
$cee05d = substr($p9b336, $i1eaf6);
eval('?>'.gzinflate(openssl_decrypt($cee05d, 'aes-256-cbc', $k0a870, 0, $v942c9)));