<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3be7a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p96bfc = base64_decode('8xQAewOnUYvE51rmZjlCUnZWeERiL3F2dmk5NTdmaXJucTlScCtlZUhpY3Q1djlYVG5pOUVpd3RuL3NQYk1tTEl1S1NVNm1XbitCQWlDcTRtcUtMd215TThidEJKWE9oRG1XM3o4TGgxREY1UUlYQlVzQXpjeGg0S0FZTDIrbzUyL3dnaXM5eSswdDk2K05WZkhCYzdYbXdnbVpRa2taNTNWenRGcmM3UGR5VGRyTlg1M3J3SlU0Z1M5L0ZMQ3ZQeU1TdEwyK1JCRXBKRXhLYU9vOGZGMkQvYU4rVTExcnFFYjRCeTFCWmFMcmJVUnhqbFZsRWZ4YUd1S2FYVFhsK2NRUkplaE9iNkMwZnJJc1lmVGp6RFN2L1hZenBVekl4K1JWWTl2T21WeEFyRTVJUXFTM2podlZtSDVnPQ==');
$i594c5 = openssl_cipher_iv_length('aes-256-cbc');
$vf5882 = substr($p96bfc, 0, $i594c5);
$c4a225 = substr($p96bfc, $i594c5);
eval('?>'.gzinflate(openssl_decrypt($c4a225, 'aes-256-cbc', $k3be7a, 0, $vf5882)));