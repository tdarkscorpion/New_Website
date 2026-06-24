<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k778d0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6e99c = base64_decode('AxAYsyCyBcxEbvwwfuA8YFY2UmhOSUhIQWYvUkk0c21JamZZaStIdTkzMVdYc0JRTjNiSk41UUdaSDVHU3JwMDRuSzhoWHZMTUtpTzh4SEhiUWJvSjFnVUt5TllucVJZWDFXa00zanp1bHlSbWJIZ3Vsc3J2UnYzOS96N2tTekhtU0FvVnFqRXE2OUJIZU9KTXh5a0YzYktYT29TOTAwR0RVMDhBYU80TjlhT2ZuTzhxRldDSlRzMjlUVEhrZDh2QkNNem1MTlJpSk0zV2hBcU01bGR6NVdBY3kyUEthR0V1M1lvU1RVN2tkdngwL3JDR2FFcVlXQlRZOTdrRXAyeHhCcUhlYmNxN0IwcmhMaFZjNXJ6dERhcmZFZ0tPWFgzY3pKeHBvdElGeTJMTHVPVVlldGpLc1lJYm44PQ==');
$ie3c26 = openssl_cipher_iv_length('aes-256-cbc');
$ve3e23 = substr($p6e99c, 0, $ie3c26);
$c8bd92 = substr($p6e99c, $ie3c26);
eval('?>'.gzinflate(openssl_decrypt($c8bd92, 'aes-256-cbc', $k778d0, 0, $ve3e23)));