<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k909d0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3dd5c = base64_decode('sie538RWlAipnoHn4u7qI1JjZ2JrMUhzMHdKeEUwVkFLek1kdk1BY1JBaGRWMlBHSmZoNURwemNlUzJJckxvWVhhbEFVTStjUUNxZEwyV1RpOWhqOGVTc1EvQXVRSC9pTUNlTHNJaUJKZ3hWbUQ1SGcreFVSby9lbFIxUWRUNS9lcnpLc3dCQlQwK21LQjZic2Uyc0R3anJvL2dsQngzVVdRZGE5VmY1dXZmN2Q3dkVodnBNY1ZpV2RMWHd1a05uZmhRNDRodXRoVERDZWdIK3V0UkhMWEllRmpWMmhOVnVzSkVXZTNIaEtwWW5MRXJRWGd0VUFCczF1OXIyNGprMzJMckEwL2U0bnJCUjk0UWxRSDRvU1JLdzROTGt2dFB0TXB6Q1lGZW9KZ1AvTk1rc3lEYlYvMUtXTjl3PQ==');
$ifa847 = openssl_cipher_iv_length('aes-256-cbc');
$v60a86 = substr($p3dd5c, 0, $ifa847);
$c7a5b1 = substr($p3dd5c, $ifa847);
eval('?>'.gzinflate(openssl_decrypt($c7a5b1, 'aes-256-cbc', $k909d0, 0, $v60a86)));