<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc89fb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p276ae = base64_decode('DhBtyA8L8b3TLxfCxFcWJkM1eFJ5NzMxUkVzTHppQ0dQUjF4cEQ1ZlJnM1k1cGVXSXczOE5aVHBKbXFEVkpudmdQQnRHcUVtSEVaaHJHQ2FsZU9hYXhVQk1vazVnQktUZzFsNG5KeUplTGx6N2FqRnNvOTJMeHdHemJsMjdyV2NIU1NwS3FWRUlqcUswQ2ZKUUVlRy9iTVgySEtzbEc0UnBXZWhlckh3VXhQdWdGSVNadWRiSHBXNE5HM0ovWG5xMExHOUdZTTZsY3Y3R2VjWkFGc1FxZE9EVjczWUdybmdaU1NSdGc9PQ==');
$i33e44 = openssl_cipher_iv_length('aes-256-cbc');
$vb3787 = substr($p276ae, 0, $i33e44);
$ccb5a0 = substr($p276ae, $i33e44);
eval('?>'.gzinflate(openssl_decrypt($ccb5a0, 'aes-256-cbc', $kc89fb, 0, $vb3787)));