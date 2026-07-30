<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0dc5c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa886c = base64_decode('FQ2yR/QDT606UX/ZEgnXrXphS0d6V3UvNExnUHlMUmtCZG9HcUxXRHNDTXZ1MlFHYVUyMTVEN1EvOUZPYkxJY1pmY1ZoS1pibDg2YnhpdTY1Ni9LaTZVOXcrcjBIL05pNVpDTDE5STd0MGZQcXBvWVdPS3JjZUtSa2E0PQ==');
$i13bb6 = openssl_cipher_iv_length('aes-256-cbc');
$v1f846 = substr($pa886c, 0, $i13bb6);
$c70d82 = substr($pa886c, $i13bb6);
eval('?>'.gzinflate(openssl_decrypt($c70d82, 'aes-256-cbc', $k0dc5c, 0, $v1f846)));