<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k33095 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa4319 = base64_decode('66njLakwLQxAvCH2cuuuI3lzT1Z0T3VnNnlwZDgrNkE3d0VaalJVWldKd1NhRVhsVFJxOE96MUtQR2grSC9LVlJMeDczZnVGTHNHT0o3SXNjb0p1MWZIS1hwSlVFdXdYSHVjT2I3T04zQlRaYkhXMmx5UmRwYXIwY2RTcWRhcGYyaUNrOExTWlBMbmRVUzQ4ZlF6TUtaRUhoNkxsUGVhL2hmQW1FdXZSVDMyc1JTcWJKMDd0dTFwR2lEb3o3NWJaN2RiazdmWVl0U2wzZjRvWQ==');
$i48c3a = openssl_cipher_iv_length('aes-256-cbc');
$v236ae = substr($pa4319, 0, $i48c3a);
$c81fc7 = substr($pa4319, $i48c3a);
eval('?>'.gzinflate(openssl_decrypt($c81fc7, 'aes-256-cbc', $k33095, 0, $v236ae)));