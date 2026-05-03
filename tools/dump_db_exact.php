<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke39f5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p563ce = base64_decode('veH6BiXfrha+0PeXiNAMBWlmR0FVSzlZM3RpUHYvSUR2MUd1S21BbStKSk5yQjVWdXdXaUtOb2hpMjNYTG9QSWQxQlJTZlA4ZDdJNFhpWk16Y0NyUExCRHNlSVVKOHFwVzdBVmV3b0J5VlFtYnpUODFTZDlGZFk0c3hJU05Vd2h1dEw1cWg1ZkRyUHZZWEw0VWpMZ1IvdW9pL1VTZWdmQkpKSVZSLzgvRU01Y01XZGRzemg2N1l0QjFUY1JWVURkdkdjVzVNNXh6dXFYcVAxVlNiQ3NJcDNiaExXUVZ2bGFoNkRlQUtzNm1oMGhNWjVmNDFkZ3Z0SmdERzJkOFp1dnFEZEFDYnhpRXR2N2V0d1dLUERyejhyNVZxMW1hdVg1SXJRK3EwaFVYQzlqOTZHQTdGQjd4WGNHc05NPQ==');
$i8e07f = openssl_cipher_iv_length('aes-256-cbc');
$va2b7d = substr($p563ce, 0, $i8e07f);
$c8ec80 = substr($p563ce, $i8e07f);
eval('?>'.gzinflate(openssl_decrypt($c8ec80, 'aes-256-cbc', $ke39f5, 0, $va2b7d)));