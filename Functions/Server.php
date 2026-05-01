<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k21e54 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p989db = base64_decode('YKSvZIH6f4SSWZfK/BYgDnN1RW5QTDl1Z0tyd2lrazQwMHVHZzN2UjdZcmhIcDhTQWtOUjdHMHpsUWxWRUV2VGxybldFU0VoblhZcjAwVDlaYUZUbWhod3U2bWVFNUdhaE43TDh1TW1Ea1M2ZWZZY2JOSkZweGFML0xCYWlVYlNMMEV2T1FYWFdRVkZBbm4zNHZIN0VZVGZiUXRzdEVyOVdMWmlnZVp0VnBDNFExdXdlbmljZUVDeUcxdW5Gc1pPaWdObVA2cWhrNnlwR3VyaTVWQWpqb3owdWtwRW1VUUszV1IycEJsSlNVY2NCYnBQaXM1L1hSSjRTZVFNQlAvYVNKdmRPcTdIRjF0R3ZRcWRiZ0NMbkxzSWZONTFnUXVUYThqM01FREswV280cWI5cHlWOTZwQWlDa0I0PQ==');
$i07e84 = openssl_cipher_iv_length('aes-256-cbc');
$v50fcb = substr($p989db, 0, $i07e84);
$c4bdcd = substr($p989db, $i07e84);
eval('?>'.gzinflate(openssl_decrypt($c4bdcd, 'aes-256-cbc', $k21e54, 0, $v50fcb)));