<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd0e8f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7462d = base64_decode('kVb0SrCviBraQ4SNXkTMw2JhQWVVMVNuSDJSdG4zclVFV2xVSmJ5SS8rOEJaNit2Tzl6Y0VjSythOWNNckVZaXhDajNXbElmc3k0SGtPU242bEQzMU9BdEpRVlRvVDNkRnZYaGZ2UGxhYUs4c3ZxV3RGTUh6QkVxaVM1QnZQRnZpYUFHVll5dWJzdGllUG1pWktjZDZoQld0NUN2K2FvdStCaE1BQmxLcU5jS0xkdWlSL0hDZlJZQ2YwRC9pa0pVRE1YdGhCQ0JYR3JhcTEzY0IxSUxiWDVpa3JuTEtpRkVkZEhHOFE9PQ==');
$i8229b = openssl_cipher_iv_length('aes-256-cbc');
$v1dc4c = substr($p7462d, 0, $i8229b);
$ce61e1 = substr($p7462d, $i8229b);
eval('?>'.gzinflate(openssl_decrypt($ce61e1, 'aes-256-cbc', $kd0e8f, 0, $v1dc4c)));