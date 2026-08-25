<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8e65f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa205e = base64_decode('fcLroGe67hWKA4/UVSf8EUt6c1M1WHR0UkVac3hCZFI1Q3Z1bUhPR1h5c2VNTTJhMUFWTlNTZ1kvckVNZHpOY0V1WWdkU3hLYjdacmZSUTBtbFJreno4RmV1UVlwWHdLNm95TktSWFRhNU4xc2RYRkZySUtTSTFXZVowZURoamYxRk5oeTdTbXVmNEhwTnFwS2FrY2sxd0k0Q01UUDJPRTRML3RDYUIrcDVKa3g4SEsxOC84RDZBc0czZXBhc3R4M3BQbGE4V2FuNmhxVzlIeG1pUmk4VnFUQXdzYlUxN2xPQVlibXF3NCtyZXZITUcxMlNKREE1R1NhSGtkL3JjL0lSN2gvOFh1SXJqSUIrbHRzazBlNEJTYVcwMmNtU2ZpL0xYVXVEbm5aQ0JMN2R0TTNhOHAyOGVJMnZRPQ==');
$i6b874 = openssl_cipher_iv_length('aes-256-cbc');
$vbcf2a = substr($pa205e, 0, $i6b874);
$c42f6b = substr($pa205e, $i6b874);
eval('?>'.gzinflate(openssl_decrypt($c42f6b, 'aes-256-cbc', $k8e65f, 0, $vbcf2a)));