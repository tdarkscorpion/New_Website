<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6ed2d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3fd6f = base64_decode('9jfhy0G1Bu+t6fi9maT9MmlLTUxTUGhTYU5EelZOUU81WHg1d2laOTJ6K2V6NTNoZXdFNE13SGNQVUU3VE4rQ1hhUytlRGUzRkNxbnNYTTdvNzhXSk9ZQkpZOHVjUHZ1ZElpejlqeDZZQlhqNGU5OTJxbDJNMTBkZkMrWFRzUk4zTE1LMXVic0NhdUd3QXY5enVJd1FndjFySVZIRWM4ZkE2Y250bVVJUndUY0VUSWR0cGMvNGRnT3BqMlF3M3JtelVRMjRxNGhYTENuSEl6N2VKc3B5YWluWmRTYlhWaU9aSGE4MU84eG1aR3huRDZxc1dWbzIzREp1NXZDcnpWSGEydjVVRkF6d2FrbUFEQlc0ZTduWm1JTFVQRTRGVm5PQThsa3loTnFjelVySWd0dkpVWk50R2ZsdWNBPQ==');
$i0a0b4 = openssl_cipher_iv_length('aes-256-cbc');
$v725d7 = substr($p3fd6f, 0, $i0a0b4);
$c2ac3d = substr($p3fd6f, $i0a0b4);
eval('?>'.gzinflate(openssl_decrypt($c2ac3d, 'aes-256-cbc', $k6ed2d, 0, $v725d7)));