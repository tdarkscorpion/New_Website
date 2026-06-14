<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k561a0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p63e87 = base64_decode('Py0IYswCTjeGiCM6xDyBQTVBblZobzl5M2x5V1U3enlSZ3lJRE15L1I5RTBqMWFkMGQ1K3hKTUtJZkcrSlA4amJhelJNV21ENFdjS3RUd2FKcHdWQjI4VmEzc2FYWFhmU1lqNFlOTkJtODA0Y2F1SjVJOE5VdnJtTTlJUWVYdXhjVW0xT283aExpcm5jNzl0eGhuQ0tLKzFPT0FQY3VnY2ZaRE11Rk5CM1g1bHo4YzFEWDdqaEVDZ0JSK2hqeU9Idk4rTnFZQzlyVFRORkM3MA==');
$i79c17 = openssl_cipher_iv_length('aes-256-cbc');
$vf3a37 = substr($p63e87, 0, $i79c17);
$ccb4de = substr($p63e87, $i79c17);
eval('?>'.gzinflate(openssl_decrypt($ccb4de, 'aes-256-cbc', $k561a0, 0, $vf3a37)));