<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1b609 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p884e3 = base64_decode('NtUBQu0LdeDOAK7s5FbVF0VKRDRPclhTcDN1WjkyZlp4d0VxNFhPN3FPNUhOWXM1SE1EYzVoUEtvckFyWVZ6WW83ZmdFd3o4VXZqbHkwcDJXR1RIS1QyQkhvckpZL2VFTmlXTHlpWlYvMURqR0hXNmZkVDZ2TlloSmZnPQ==');
$i4108d = openssl_cipher_iv_length('aes-256-cbc');
$v1210b = substr($p884e3, 0, $i4108d);
$c9b893 = substr($p884e3, $i4108d);
eval('?>'.gzinflate(openssl_decrypt($c9b893, 'aes-256-cbc', $k1b609, 0, $v1210b)));