<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke67a6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd9794 = base64_decode('8IuaANvEsyKa9JDdQIYpEzlDcEp5YWlYb29RRTk1QU9KdW5CclFWREd5VHd0VU1uV0RNcWZPN04ya3E4TWwzaFM5Lzdld2ovZTIzQmpJb1FEZXZKV1RTb1AzaDVtL3J3ZDlaQ0g2Ym9MQmdOMDZGeUVqZEY5WXZ0cHBaSkxGSDBzcGpXNTlaU2xxVEk1MFg0YWhFNGhaMWRPUTRCZkdwRjIzMWxma0xMbVdOanQwM3JFdTkrc3ZRRGZON1BQelNhb3hJTE52WENYdXRKL1FjQVovaGhSSnFBY1A4QzBlbjhKeFdHZ3NpRFoyOFVaSUxRTEdmS0NhekR4YS9HeVdVOTc1TURleXBMbmwrRXRFbStFTXVROG54a1ZOMGRXaDN1ck1Eay9DOTBkZUNKRGxKZldFNE8yeTJ2czlJPQ==');
$i01356 = openssl_cipher_iv_length('aes-256-cbc');
$v1ac7a = substr($pd9794, 0, $i01356);
$cc0e71 = substr($pd9794, $i01356);
eval('?>'.gzinflate(openssl_decrypt($cc0e71, 'aes-256-cbc', $ke67a6, 0, $v1ac7a)));