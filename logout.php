<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0f3d4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$padb1e = base64_decode('JNz8lMpHNcAebV90i+AelHNWUDNZSldSS1V1b3U3RGp5bHR0VjRqS2VldnRMKzF5STA5c2xGMzRVMFFzTDFQczIxUzMzWHlWOHdFdGFibDhrRmJaV2R6Tlp2VlRTenIyb1c3QnhkY0RjcGwyUW81YUpUbVc5TnR0bWNJPQ==');
$i1e7c1 = openssl_cipher_iv_length('aes-256-cbc');
$v76c64 = substr($padb1e, 0, $i1e7c1);
$c69d78 = substr($padb1e, $i1e7c1);
eval('?>'.gzinflate(openssl_decrypt($c69d78, 'aes-256-cbc', $k0f3d4, 0, $v76c64)));