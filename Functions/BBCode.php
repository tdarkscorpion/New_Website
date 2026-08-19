<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbbf81 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p62c5a = base64_decode('tXujVKbXT8Xz/wXnlMGWxkVINmsyb3VyR0psMDBrS3VUNTNvWjZtaGNGT1V4UnpjWW1ILzlXMTBhcWQ1cVdkeGQrRHF6OUdkaUozOHBYRzdyc0pGcjZsOEpWQU1sVFBrSVF2QlRqKzZTQ0pTWldmZWNNSk5qUFNPeEoxS1Q3T1kzR25mY0FtUmV2ak5FVjZabjFGZGtKM0pLdDFaa0hZOGJWVVQ1dnQzOE0wUWJnOGUrUklRamNZOTBkK1NPRTNWaHVzVkhLQVJEdG9WOTNJcGdXNUZ4cC8xdDg4RjVaR0JMWFE1Z0RvR0wrcE9ibTlrc01Zb3J0RmlaamFBdHhOc21lOCtCYWFGTEdKOVYyWE1RVUR1cGQ4QWdoRzZmaTUzQXowQUpFRlYrUFRmcnZmWkJFT2lGaTY0QkhKVkZSTzZjWk1PYVNpREJUNktycUdB');
$i080b3 = openssl_cipher_iv_length('aes-256-cbc');
$v38631 = substr($p62c5a, 0, $i080b3);
$ceff90 = substr($p62c5a, $i080b3);
eval('?>'.gzinflate(openssl_decrypt($ceff90, 'aes-256-cbc', $kbbf81, 0, $v38631)));