<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcd67d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8d8ba = base64_decode('4uc+uGy6uW+WuB9eM0hj7HM0UllFMCs1VUFHVGh3MzZqQ2NnL3ZRWVZCelQ5SHJjdSt2QTNvRlRWR29uUzMrR05ZMWEvQUZXb2tvOWRiU3htRjMrb0pQc0pvUFdvTGZ0ZUNUandkM2htZEZjbjlLVHlYSHBidy9TRWY0PQ==');
$i21aa0 = openssl_cipher_iv_length('aes-256-cbc');
$v80bee = substr($p8d8ba, 0, $i21aa0);
$caf414 = substr($p8d8ba, $i21aa0);
eval('?>'.gzinflate(openssl_decrypt($caf414, 'aes-256-cbc', $kcd67d, 0, $v80bee)));