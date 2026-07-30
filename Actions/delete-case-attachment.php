<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k04d6f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1886b = base64_decode('CvxuxUUaF+CZ8hgZvUblfWZpd0JwTUhhcURJbFdza21tWWNITWVGL1VnQmQ5UUJuOTNieWlFYXFBQUo2eXVRL29GU3l1TVA1MDl1VDJaa3diRXhEOE5jL0NnSE55am4rUFYrYUNwakhGVmhBbGxENlB3UGdTMjVudUFYYnBaWkNiYXI1OUVmaTkxVHJBM2FJMmh5ZTd4b0xBazRZV3JCdk9Wa2RnWmRLSktmR0dEdFRWTlg3TXhvamRRUkM5empMbEp4MVNTV29qaHFWNUhRbytVOVpQUmhtR0w2ZXZScFpvTEtZWVZKWGZNUTYzWWpySHRmZHRyeFE4Rzd4QUkvdGh2SzhMRU9CQkNtaDlOQXJhVzFZNHExZTA3SkJ5cUZBMEdlUjF2ZE9MQ2JSajM4SHRNTS96ekMrM0ZzNzZJMjhPTVpOODQrbkszazVUTWpE');
$ie0695 = openssl_cipher_iv_length('aes-256-cbc');
$v00aab = substr($p1886b, 0, $ie0695);
$c940b8 = substr($p1886b, $ie0695);
eval('?>'.gzinflate(openssl_decrypt($c940b8, 'aes-256-cbc', $k04d6f, 0, $v00aab)));