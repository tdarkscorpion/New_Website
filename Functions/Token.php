<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9f2fd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb600e = base64_decode('TTNAPjsxRbAgk0657IeXtGRLY0pDVnVOQUNvSzl1aFpCWFpNanNBZHRuN0ZzZnlkdXZFWHN3UGtpcGVpUTBQTGFTQ294KzZpQWpjcEh0YlRuWnFlOEpjV2FNUDM3T3B5djI5MkVyaHZpY242MEZscTJmWVU4UmJpWi92U3FrWmQ5cUp1dFN3L1JTVGJzVEZaV2VSTHhBNzRkUTRKaDdyeHIvSWdhbkNybnpzbW82RGlNUkNhQ2FBbXZmd05Fd2hFWDFTYmw1dVd6ZDJMZ1hzcEVQYytINHlKN2tOLzBGQUYrZWpTR3Q5VWY3ZTVUQW9CRTd1dTRnaUVWVzJtZUxxR0hTdE04M1VFeTVhanBlbHI=');
$iaca56 = openssl_cipher_iv_length('aes-256-cbc');
$ve0a96 = substr($pb600e, 0, $iaca56);
$c93640 = substr($pb600e, $iaca56);
eval('?>'.gzinflate(openssl_decrypt($c93640, 'aes-256-cbc', $k9f2fd, 0, $ve0a96)));