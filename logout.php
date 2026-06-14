<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbf4fc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe8705 = base64_decode('iZyUkCqA6luV8PhKaF5mT0M2K2tmbXVYU1JlV2FNby9LUzRmVGlvSUQvMWJLd1NHaENjdGl6QUJZTU9LM3NNWFFOQlEwbnU5Y0p2aW1tTWpWcFpGK3N1Zm5WdTFrOEk1QzF6QWh1MHpMQlZLcXhxVE1jR1RHeWZJZDVRPQ==');
$ia6d49 = openssl_cipher_iv_length('aes-256-cbc');
$v51f5a = substr($pe8705, 0, $ia6d49);
$c5dbaf = substr($pe8705, $ia6d49);
eval('?>'.gzinflate(openssl_decrypt($c5dbaf, 'aes-256-cbc', $kbf4fc, 0, $v51f5a)));