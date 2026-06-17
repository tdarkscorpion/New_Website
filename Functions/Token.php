<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdd488 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa3b66 = base64_decode('TRjF+Hqjhs1xGU+q4Qjts0FxNEpkTHJ4Z1pOQWJFbkxNZVYxdkRNWXlZK3NmVVVRTG9vMjh1d2ZpYmVpNDFCeWo2dzM1d01XaEdESHY4VG54TXkwZ0F3czdRc1dXTEJWY2xBcjRWWTdPQnEvZUxsb2xudWRWRXhBVy9GWk1iajRlMTk3amhEblU2Q2lGZzhKSUxrb3lnVnNhVVNkdW5JbXA3NmNBQS9YMERPY2FuUWlWb0dacHYycXQ5NFRpVndFcUgyMUJtdi9kSnJ2YjduellsRThuLzBRRG1HTG1tMStwSm5vek9tQVoxUHZQMXRmLzJUQWxrTm1SSTl5dGZLTGw2d3M5SksyUHlwSjl1KzU=');
$i7634e = openssl_cipher_iv_length('aes-256-cbc');
$v0576a = substr($pa3b66, 0, $i7634e);
$c9ba12 = substr($pa3b66, $i7634e);
eval('?>'.gzinflate(openssl_decrypt($c9ba12, 'aes-256-cbc', $kdd488, 0, $v0576a)));