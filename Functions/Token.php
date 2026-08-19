<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0d407 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbc493 = base64_decode('ZiaDtQoJGLNUyoDFXx6NdzF5NDltNUJORlFLdW5aQTJ4eE1NM1FUYWNYL3UydEt3bjFpbGxQYmRJbG0xSzN2aUkxYmFPWlFjakpyVkZQTnk4ZmFKRUpDMTZPUzREZXhrQmlFZjZWOVFKSXh0bHdEQ2pXZk1Ob0poVHFsdzV5NVVBcDNUQk1sUk00aUQvWlFLRzZFWDlIbW4wMm5iVElzN0NQczR1RjRpaGdRNWNGMUJpMjdvRHFHRWZrYVJpWG1DZGovNFRmUkFCM0tXcXpudCttY1ZTNWhBNGtPQlA0UmxLODhnQ3BDd1RJZENwMFJXTE5HeWVsdmZ1MS9walhoZ2RVWkxjRnJVeEQxQXBiaDE=');
$i39e91 = openssl_cipher_iv_length('aes-256-cbc');
$v76304 = substr($pbc493, 0, $i39e91);
$c96e58 = substr($pbc493, $i39e91);
eval('?>'.gzinflate(openssl_decrypt($c96e58, 'aes-256-cbc', $k0d407, 0, $v76304)));