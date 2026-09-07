<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k70acd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p05534 = base64_decode('3wEeyv37rSR95XtNcwlJNEpkMWlRd3dwT2tVeWNJb0FyN3B4QkxNYWwvSDZWL1VHUTBUdlpLeXNmZDVMcUpRY3drMUpnQ29nY25tcGt5R1ZyclIwbkRQQ1ZIZ0xDVEhhbkV4TE1DTlhHdVlLN2VZSy9GaHd6c3VRYWVZPQ==');
$i52fea = openssl_cipher_iv_length('aes-256-cbc');
$va389b = substr($p05534, 0, $i52fea);
$cb474a = substr($p05534, $i52fea);
eval('?>'.gzinflate(openssl_decrypt($cb474a, 'aes-256-cbc', $k70acd, 0, $va389b)));