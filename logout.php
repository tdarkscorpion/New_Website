<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7243e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3a398 = base64_decode('7hkr+Wq+Y1vKDkAemBem8GI4Uk9Gc1FZUkJ5MmVQREIyclcxVS9sN0lZVlFZa0xiZDVTVkxBWWdSNVRMdWhiYXNIZzU3clZhWllWNVZNVnhacG82YUJGNXZpUTROaDVwZGJhQ2xONFhjWXNCeW1TZ0JMSUM4YUovQWZRPQ==');
$i35f0a = openssl_cipher_iv_length('aes-256-cbc');
$v45db4 = substr($p3a398, 0, $i35f0a);
$cc5314 = substr($p3a398, $i35f0a);
eval('?>'.gzinflate(openssl_decrypt($cc5314, 'aes-256-cbc', $k7243e, 0, $v45db4)));