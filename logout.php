<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k76ac9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa4bcd = base64_decode('S0+zTqrJaMG+KPJ/2gf18HhQcjY3WjB5UmpndXo2NXlGRVpvYlloK3FFalZOVExKRTU3alY3WE1CUlJ5a0xmdTJIOGFQazRJUjVZOExtaTZsV3Z2YUZGNTAybU1xOVRqeFFZZkVmNTZxcHhNeXIyZE9kQVpEYk1NOGgwPQ==');
$ib6cf0 = openssl_cipher_iv_length('aes-256-cbc');
$vb889b = substr($pa4bcd, 0, $ib6cf0);
$cef52d = substr($pa4bcd, $ib6cf0);
eval('?>'.gzinflate(openssl_decrypt($cef52d, 'aes-256-cbc', $k76ac9, 0, $vb889b)));