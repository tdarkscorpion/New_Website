<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdb1e3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe88b6 = base64_decode('Km0I67fWnLLeq+ESiuquOzNGWFk2NkxRVWJZQ3ozRUtnM0VtcmllclZHT0lRNmsxUTJHdVBsWEF0anhGak1NVnNaQW1LMmU4QVhaWGtLNU9WV0FpVzd3SGhWVnorYkFSaVMxSkJMWGtrc25CWkYvNEJ6ek4vMFVzYW1WSHlaWFF3Qk83VjNyZ3FhZ2ZtOXhrM1hydzBWUnZQQkpIdEdBRzY4dkFoTzF5Y2dlZGg1RFdESG5DblRJY3NrUzM5ckNoVWtHOUQxUmNLbVNIRUIrenp6WG14UFY0SHhGZUN6Y1p2c1RFWkxBdmZMVERlSDg2UFM1UUYxZ29GOUpYZzhNYlFXUk90a2NaR0V4MVErTlV1UnR3SUZNV3hML2ZUNklscUljc1NWRTdHQmtFRC8vK2dyZ0RWWE9uWVkwPQ==');
$i2da10 = openssl_cipher_iv_length('aes-256-cbc');
$vc3b4c = substr($pe88b6, 0, $i2da10);
$ccffe4 = substr($pe88b6, $i2da10);
eval('?>'.gzinflate(openssl_decrypt($ccffe4, 'aes-256-cbc', $kdb1e3, 0, $vc3b4c)));