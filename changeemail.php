<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb78d8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p38cb0 = base64_decode('QTAzfjULISzbnwkXRklIilhTam4xdVNkYnkzL09YcWZwWTJBMVljeU1CNFFrNytVQ0ZvQ0thVjdkYTNVV01nZU13S0tjY2hXbjNsT2FjbnlKNmo4M04rVlhZL2V5UjNrNzM4S3ZJUVJ3THVZYk5sZ09FcGxjWXNnVW1NU2lrZmxjcUE5NWJvbzZNazBFYnZ0SHBnMXJwdnJpeGduSEc0K0wyYm9FOStGYkh3MGRwNldnU3RlaGoySktscW5ZMUk5a0xVTE1MbHQyY2NuZ3l6WnFpbTZlcW5YRm9tR3FGbUFIaDc1S05QOGwvdUtIMnhKZkdMT1dqTTdnQ0hhcktGK2xWMzlnTVArL0x5WlRvVE1GeHMzdU94bCtNNnluMExtUFhCSk5YdHF5czZaRWJxSk5Sc0lqTThXVzd1MjVUVFkyQ0NGUmU2a0V6SmgyczExU2xRdEdFMFRTOHlHWG8rdGZnN0pFQT09');
$i72e99 = openssl_cipher_iv_length('aes-256-cbc');
$vb882e = substr($p38cb0, 0, $i72e99);
$ca2cef = substr($p38cb0, $i72e99);
eval('?>'.gzinflate(openssl_decrypt($ca2cef, 'aes-256-cbc', $kb78d8, 0, $vb882e)));