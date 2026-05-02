<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7554c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p448a9 = base64_decode('bLwalM57jiClIKEUfRq7Enh5Q2JBMFMzb3hRelZra2JrS09tODRrVXFpSi8vM1d6TWZOcml2dFJLWFM0dUNUOVdkUzdVTTZWVVp2UGw5Q1hJOVlFNlp0QkFtb2xrUEt6VUlIbFBDNnRXYkg1cWRKUzhJd0FrTk9Kcnc1QmluVFlHLzRIelRuMmxQZUZwcll6NzRiaGNJM05pdVo3cVRaZGRnY0tybGMrVUJGQjBOU2xaK2pCZ1NaN3lSK0hjcXZQOXJjNkVhTzViK243amhqR3JnU0gwVmZaUzJVNCt1Y2I4TXRqSjhCY3BoTzdtaWlNOTJ3OWQ3dXpKeTJvRjNmNlFtU0RTZ1oxZ3pWQUcxVzBhUlRKZmlpSElsOW1nRHBLNE52R21ZTG51eGRIS3I0SDIvNDlEVHUva3BhMUExbXZxQ2R3YmJwN0xOMGRrdWNv');
$i49281 = openssl_cipher_iv_length('aes-256-cbc');
$v2a44a = substr($p448a9, 0, $i49281);
$c23f4a = substr($p448a9, $i49281);
eval('?>'.gzinflate(openssl_decrypt($c23f4a, 'aes-256-cbc', $k7554c, 0, $v2a44a)));