<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k893d6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3b62e = base64_decode('T1RKzJMqMgDBODz/6IY45zBYa1phZ0hrWm1jUnhFNnhFSnFJRzM3YWdyTXdWV1J0bFRPMTZjaEs2eUxhZW5qVjRXUWYvc2RhbmFLeDdDVVNoaHRyYnRJZmYvTzU5OXp5Rjk1d0U5OC9wbEMwOVJFT3ExTlNqUXgraHFVPQ==');
$i75bdf = openssl_cipher_iv_length('aes-256-cbc');
$v72d37 = substr($p3b62e, 0, $i75bdf);
$c12e38 = substr($p3b62e, $i75bdf);
eval('?>'.gzinflate(openssl_decrypt($c12e38, 'aes-256-cbc', $k893d6, 0, $v72d37)));