<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k60f7c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p53960 = base64_decode('Jkc9twiP5FaewVqX+cgu4nVWKzlLa0R6TGVCY1RrNlVBcXpIWFR1Ni9LVUJCeDhkZ2lXRDB2czNtdVR1T282L2dpK3FHZld3SjNzTTE0c1hGajZqTzczL3ZmMzZTcDZsbWkwU3J6UC9Xanovdm0rQ1BRUjVGaEs0ZkpzPQ==');
$i4f46a = openssl_cipher_iv_length('aes-256-cbc');
$v2ef8a = substr($p53960, 0, $i4f46a);
$c63d5b = substr($p53960, $i4f46a);
eval('?>'.gzinflate(openssl_decrypt($c63d5b, 'aes-256-cbc', $k60f7c, 0, $v2ef8a)));