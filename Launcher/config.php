<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0e4b3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3f003 = base64_decode('a88SFYw1TEzM61JURId6pElYMUp3MGd1RkRsQkxnSmdqNlJ2NTRoUW1sd1pGZktXMzA4djgxYjUzekF1KzllWld1amI0STVFMzY0RUdLRkpVTzE4OEpMaXdBYVljYW5nWWhxc1RhaVpjSUZLenR2OGZHcGJWQUx5MnFBRlpmcVNDUzlRc2lUcDlmcHF1TFlzOGpublA0Vm93NGp5Z2orWGlNQmhHQlV1My9WdHJPcDgzQWlicnAwMENEazRrU0UrYTJKTDVUODFQeE00a0lnemNTMWh3TG82MXpPTXV2dTh3elBHZStWZDFLRm4yUm9tR3JMZUNDdVI1ckVQNDNkVGxMVHE1c0E3NnlCUmxFeVl5ejNPL0JZdzZXWFZxNFk4c3Q5ekZMcG1uazlPa012U2w3ZE5kei95YzkwPQ==');
$i84a62 = openssl_cipher_iv_length('aes-256-cbc');
$v5446e = substr($p3f003, 0, $i84a62);
$c020ab = substr($p3f003, $i84a62);
eval('?>'.gzinflate(openssl_decrypt($c020ab, 'aes-256-cbc', $k0e4b3, 0, $v5446e)));