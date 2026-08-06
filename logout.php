<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2880f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9b739 = base64_decode('1Nkv/+8DMF55PSHoWHTBFTlkWjhUdURmYnduQlZFalZWSFlBM20ybGtFcmFSazFLcGw3L1A3UzNXMnNheGpnNGVSWXdrbTFmelVQVkgvNDZMWEJjcDdUWnBrakFNVnUwNnR6QWpjQlhGblFBWkZuMzZhZ2RybDZ1bWtrPQ==');
$i5c02d = openssl_cipher_iv_length('aes-256-cbc');
$v9e4a5 = substr($p9b739, 0, $i5c02d);
$cd53b6 = substr($p9b739, $i5c02d);
eval('?>'.gzinflate(openssl_decrypt($cd53b6, 'aes-256-cbc', $k2880f, 0, $v9e4a5)));