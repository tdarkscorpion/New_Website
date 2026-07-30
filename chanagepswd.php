<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k09fc2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p78768 = base64_decode('TYIJjxQwRyPuvlq0lA4ptm5yK0piakZOM05IZmJ3OUljdHZjSldlQjlmTFlHTkg4aTErdG5EVHNoVlVWODFzclpzNm5zMHB4bEg4RGtYMmhiSFN3ZVdxS1hWc3dGdGR4MmV5eWViREg0c2pkZU9qNXE5UlRFdkpTOWZDcjFGeTdRNmFpZERWVkNIUEJqMWZSdXpPS2RxZkVrZmFrS05adGNLL2lLcTkweTl1Rm0xOHZSNU9HSWU5dzEzdTV6V3VTNlgvcTJLNHlqZkxKQ0I0OFY5VTFmVmFJNTAzWTF3dmVGUldVendNRWRLd2RudmVhbzdwK3l5WGllZnhSMHpscEtmbnR5Z1phQVFWd2F4cHQyZDZybEV6eGVGWVB5Y1p5dzZCcnFuNUVjNHVyVlVXc0VjODhZZGFONjAwVWdXT1hsa2JvQVpDcjh2MXFRQ3ZPTGpXSE5CQnRESlBJTk1YQzVjWFlWUT09');
$i7980d = openssl_cipher_iv_length('aes-256-cbc');
$v5e241 = substr($p78768, 0, $i7980d);
$c2f13e = substr($p78768, $i7980d);
eval('?>'.gzinflate(openssl_decrypt($c2f13e, 'aes-256-cbc', $k09fc2, 0, $v5e241)));