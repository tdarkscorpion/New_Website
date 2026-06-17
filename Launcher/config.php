<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k883ff = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd1259 = base64_decode('luwT4OkZMIXQj31yn35EvE4xOHBDb3J5UFlYM3dYZkdsYVVnNks2WUF1UzkvdnQrUTBTZmgreTJLUDVGUVNSbGlZMTdDNlFIMVFCUDJLeGdIR3FGWHNySk5jVFFMUThsdXZpUTV5bDNJSzFsWjdWNDZ4VUd6TW81Rm5FVzVveFdYS0s5djBoanIzVzhpUzUrOG05Q2hjeDJkdjZPcHVtbld2cjZ5SmRNVkxsT2hkZVhMaW5sR2tSRVZpbXl2dFVSMVZLNTdhU2xXU3QzYWtzMXE3alNGajR3RFhuK1ppRkRqWFYxVUhOb3k2bFJRTVlXTUt3bjVEbGQrVFJwWXJyZWloYkxuam1wQU92dmRHTWxXS2J6SjUwUUtRVi9acXdMRlBhaVFMak0wOFBPWml1Zmx5a1FZcVN3cWE0PQ==');
$ia45e5 = openssl_cipher_iv_length('aes-256-cbc');
$vded12 = substr($pd1259, 0, $ia45e5);
$cb1369 = substr($pd1259, $ia45e5);
eval('?>'.gzinflate(openssl_decrypt($cb1369, 'aes-256-cbc', $k883ff, 0, $vded12)));