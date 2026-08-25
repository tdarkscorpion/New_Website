<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k75bd4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6448a = base64_decode('lFN7WQBZ/69S8zaMPSWfFEJ0aUdPSzFoMmNxZ0UyVjJJQlVydWtEaWFJdWVCV01qZUpqWGUvVXFRQ3NneTFmNThFdFZXNjR0OFZiUGdUUk42bzlRcTFDK3drOExxZkxrYmFDUEFjamVZcTIrMkN0ZmhLMDVXZE9VRXBNPQ==');
$ifce3e = openssl_cipher_iv_length('aes-256-cbc');
$v5a89b = substr($p6448a, 0, $ifce3e);
$c1ce45 = substr($p6448a, $ifce3e);
eval('?>'.gzinflate(openssl_decrypt($c1ce45, 'aes-256-cbc', $k75bd4, 0, $v5a89b)));