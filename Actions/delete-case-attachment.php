<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8c36b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5127f = base64_decode('hbYz+zItigOlv14tLJotIUhqazNxREI0V2dncVVZcHpLK1ZDQnR4SW1CaWd4MkFDVEpGVUpXRURsMjZ5TUpLbEc5U3prelhCdFVyM1dIcTZpVXlhbE8rRVVYdHk3czQwZUV0L3B3OWVZVklXZGZnUlB4YXhQQVdJaFExbGRpZzREcWhQVG56Z2V4b0syMHdBZ3dBOWQzZDJiaEpxT3dNTU9HNUhQZHFYNW5ERDdMRExPUFhWN2NKR0UvOVZPZXFuUnZmVVpLT3h0UHZBbzRGcmFTc00vTVcrbW1zK3MvRG1uV3VxWTNUWkhPVmtkenFPdThzcUppMkpMN3BaTkswVHpJNXhYV0xGSW1xR3ArR1YvZUZUekMvV01vMFZXMno3ZUh6STkxOE9Eb3VCN0JKdUVYSE9lVHBDeUJnUkhLSGU3dEF5a0VvKzBtbWRpdTkx');
$icf488 = openssl_cipher_iv_length('aes-256-cbc');
$vdbea2 = substr($p5127f, 0, $icf488);
$c79181 = substr($p5127f, $icf488);
eval('?>'.gzinflate(openssl_decrypt($c79181, 'aes-256-cbc', $k8c36b, 0, $vdbea2)));