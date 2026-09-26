<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k23cfb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p57d6b = base64_decode('oztXwiv3/HY+GPd9o0P42HdJRWsxOFNHeUdUejdYakhsVlRHOFhCZFU1ZHBISXZzWmVCT0JwNitMK0FWODlFazdOd25Ec0VzUWZQOXhQb1JvNlZyU09FWG52RG9ESStKMHF1bHlDaVd4T1VtMHNIYnEydTVZZDg0dVE4PQ==');
$i4bdb4 = openssl_cipher_iv_length('aes-256-cbc');
$v259d0 = substr($p57d6b, 0, $i4bdb4);
$cda360 = substr($p57d6b, $i4bdb4);
eval('?>'.gzinflate(openssl_decrypt($cda360, 'aes-256-cbc', $k23cfb, 0, $v259d0)));