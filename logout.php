<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfbe15 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb6280 = base64_decode('JCpwnF2yXTRrzhvjArHcxkgwdm9yZWZYeDlsSlhubStKRjhBUUtwT3ZFM2xFT0dvRlRESHBINzBKeFhiOURxNEVHcUZQM0NVYk9jZjQwNGpJWGMwQXJaTzFUOUhvVlhyQkhuSE96KzdkelBRRm43NnJVKzFaMW93aWpvPQ==');
$i9c7c5 = openssl_cipher_iv_length('aes-256-cbc');
$v9924e = substr($pb6280, 0, $i9c7c5);
$cbe9b7 = substr($pb6280, $i9c7c5);
eval('?>'.gzinflate(openssl_decrypt($cbe9b7, 'aes-256-cbc', $kfbe15, 0, $v9924e)));