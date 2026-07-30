<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k04143 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p634ef = base64_decode('t5Bu0oWUxi2WMVo7M5Bd7mtUS3Z5WEF4Z1EvVVArbGozWGNJbkp4WUpaWFNtcGlCVVpZWkZhQlZnN0NiYm5CU0VEbExOcUZuVGlidzRvZ1ZMU2dNbTNlaUtJSyt1WjdibFJVQTZCK2dvenNBN0lCeWRkbFFjNEduQjA4c0FLMUhEMjVxclFtNkMya0R2YUZXSENWMXBOSm92V1Z5L0dDZTBhc2tkUkNOeldFQ0NoK2srdmlaSnpTWmF5MGJMYlJDb3I5UThKTitPeEhjUTY1clVNVU1ZcVhnZ01pOFUrRUduUnNWWHJlQXdQendXZE5ncHZVQldJSjNYcTdCZzB1NnRiL3k0amJpYnF1bnlnSjFTMnJZZkRoeUdqbnVveGJ6dW1GQ2h0WGs1eFQzVDUzbis3N1BNSXAyUVowPQ==');
$ib3934 = openssl_cipher_iv_length('aes-256-cbc');
$v5da53 = substr($p634ef, 0, $ib3934);
$ce9321 = substr($p634ef, $ib3934);
eval('?>'.gzinflate(openssl_decrypt($ce9321, 'aes-256-cbc', $k04143, 0, $v5da53)));