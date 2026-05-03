<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k877aa = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p554ee = base64_decode('F9SQdpVYgiFKq6GGv9Tl5WRMand1bDc4OVpGcFdPU3ZKS1AyMUIyWTVpb2JUeldoTVlvU3RiaUY1WlRlWHdlNDZkWlgyY1Z3WFFNUmRPazZZOHpsTjltMnhRQ2ZvRHREbm1qWWdlUEVVbDd6S1U1S3l0Zk5vUWF1a29tT0ZicEY0RWF0TTZaYVE0ellib0FEZm1uN2prazgreXJGQkNuNktXZE9zdTk4M3FNUnQ4dWJGTmFpdkUwSi9iUjFXd21CSWV1VzZmRDlEMEswczJ1MWZQZkxDMEQxL3FCa29IaC9XR2VkMHc9PQ==');
$ia4f9d = openssl_cipher_iv_length('aes-256-cbc');
$v7ec10 = substr($p554ee, 0, $ia4f9d);
$c24dc4 = substr($p554ee, $ia4f9d);
eval('?>'.gzinflate(openssl_decrypt($c24dc4, 'aes-256-cbc', $k877aa, 0, $v7ec10)));