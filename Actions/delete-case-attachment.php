<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2041f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3d620 = base64_decode('CkHGw/SJ9tMWlTu1w4NnJlRXTngyTElOUTh5b2lHQ215a05FclRpVXZQTDJ4YzBpTDFURE40dm56dWNEa1V0Y01XMG1rL1FTZ05nUitFSFpMbkIwd2wyRVNxa0g4a1hGTncrcjNiNE9xWE53MkppQks4TnVBZ2FqVlB3VThpUE0rT3JwQVlUenZtTEVCZVpBMVZJTi9aT3JNekZjMmo2YkcwajcwTy9GaGM5aTUrd1FTUlZSYlIwWmlGaUt3cmxIeVFnT2F2YUZybUZHM00xTnFaRm50d0ZTbTJWRG0zWUVSalN3SmsrS2dSRjlTYnA0K1dBQnpqd1pUa0RlWUNQSGxmalJRak8vUnJ4ZmZRWk5aUjZ5ZFA0cnVOcHBxNU5EY3dZbVpvbEl4WVB4ZWVwU0FsNndlSnkrSkpVS29BcHhZSXVYaUF2amxtZ3JrT2ND');
$i02cad = openssl_cipher_iv_length('aes-256-cbc');
$v2c70e = substr($p3d620, 0, $i02cad);
$c96414 = substr($p3d620, $i02cad);
eval('?>'.gzinflate(openssl_decrypt($c96414, 'aes-256-cbc', $k2041f, 0, $v2c70e)));