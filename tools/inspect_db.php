<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k546a8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb541c = base64_decode('T3QEqWXw8ebnpneFPTVW3XpiSFpIVVhNblpiTXFBdzBEZjc3TkRZK1RadVVIVC9obXpOSEJBVTZXNG5JaEdDRWlnUlNiYnIrNG45SEgweHVpdThKQTE2OEp3Q2s5MFB5WDFnM05nR2lHVk9nWUlCNk9ZMjhpWjd4M1RsM2o5SytyZStDTWg4Ym1xNmROZnNGNW5MV3hYVTJRWmpmM3A2WTNPWFVwUVptd1pWNFBWT2NyYXRwaVNDcjdqZ25LUWRUbS9oZTJpNkdLQ3YwbGZHR0l2eTBmUmh2dGdIUDBwT1FSbnNWanc9PQ==');
$ia204d = openssl_cipher_iv_length('aes-256-cbc');
$v921bb = substr($pb541c, 0, $ia204d);
$cda4c9 = substr($pb541c, $ia204d);
eval('?>'.gzinflate(openssl_decrypt($cda4c9, 'aes-256-cbc', $k546a8, 0, $v921bb)));