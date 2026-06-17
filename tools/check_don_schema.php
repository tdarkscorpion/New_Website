<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k464ff = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p83a82 = base64_decode('dCj73ln2nLGoU9M0F7zrjnJoNnpJZ0UvZXN2SVkxVGNJeml0TDNxY213cS82ZVczeDdmbG9Uc2tGcW15amY1ZllhOFErZ0RoTW5YN21CMUxLcDhuYTJmREtLNE5QTURqYkZ4d1lKdU8xNzNtV1JCekZ3VXdGVWdqTmRHenAyMHFyUXZPYTlmTEZvZXptRTFrNFlYdHBtaGFJbEVvbENxUitaWDJ3VW1jWDRIbTZNOGNLSm9mL1NOeklUd2VHU0N4RC9XVHJMcjdIVlUvckR0bkFOTFFHMUY4VkNISndwdkoxeCtSZXZ1MzhjRTlSaTUxM3pDRy9KeG1ickU9');
$i92379 = openssl_cipher_iv_length('aes-256-cbc');
$v113dc = substr($p83a82, 0, $i92379);
$c978b5 = substr($p83a82, $i92379);
eval('?>'.gzinflate(openssl_decrypt($c978b5, 'aes-256-cbc', $k464ff, 0, $v113dc)));