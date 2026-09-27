<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k657f2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p25cfd = base64_decode('wtbYspE2RXOWMIqqfq+SCHkrUlF2R1RKMU4xb09CMkViNFBiQUphZ3plemRDUjBHMEFmbmwrclhwSHk4cW1tait6TWRwRnNGKzhNYXFwWGNoMXhzVlhybDBBbmZjVEljN2NGRjl5aXByMkhESGN2YklJU0hrOFJzU3ZUZGFvSTdUMGVuSzhSeDVWQWNyc1MzYWNlZGc5Ry91NEQrbHhuYjlNODlhLzFxUG1uMEpOYUZXd2V4T3p3a0NqNktoNGNrbVJiUVZCQzVKZHNkUWJWRllBZTdFZHNMRk5LQkh0TUJCNDU3QTdncG03Mi9VaUgwQVJPSnlUL0tEaUExV256eWFHQTFCTm1ZRFFaenJoNUdZWTBxWjZMTUdzZVRxOVN5clBNaFNya2R1dEhLd043bzJSK1drWjh4ZitHbUViQUlmRUQ3ZGp6OXZNZ2d1Ky82');
$ieb9d9 = openssl_cipher_iv_length('aes-256-cbc');
$vd21fb = substr($p25cfd, 0, $ieb9d9);
$c983cd = substr($p25cfd, $ieb9d9);
eval('?>'.gzinflate(openssl_decrypt($c983cd, 'aes-256-cbc', $k657f2, 0, $vd21fb)));