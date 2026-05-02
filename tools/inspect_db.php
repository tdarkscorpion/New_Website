<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb180d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4f3a1 = base64_decode('RYozCUk7GagIVKb8O/MkilBNUG9vR25kdFFXMEE2M3cyTEcvQ0Mzc0Q1SXU0cG5LZ1drQjV3VXV4dWdZMGFUUE1PRmIzaFFaRThDVjBWTWVySWR1TEYrMzAvZ0RCeitPSnE0QVJLM1pWczNWQlNkeTViZHI1cWNIZjUwbW94Yk4vQXNia3JTQURQMWhxK1dSRkNUeDJ5YUt5UEhRU1U1TjVSWkdLNjFMQlMwYlB3dlRsUzdMWFJnZjV3czcyREI1anY1bkpyc2U5RjZ3blJoTW1FQTdGYU5YdXZIVzJSL054OU1mdHc9PQ==');
$i380f7 = openssl_cipher_iv_length('aes-256-cbc');
$v968a7 = substr($p4f3a1, 0, $i380f7);
$c1a589 = substr($p4f3a1, $i380f7);
eval('?>'.gzinflate(openssl_decrypt($c1a589, 'aes-256-cbc', $kb180d, 0, $v968a7)));