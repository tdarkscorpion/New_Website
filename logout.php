<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc78fb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd1f57 = base64_decode('NvLQvyQxTZyyTcj9lPt2hGxLT2JXUi9sWTUxZC9XTUlqUTc0ZU1LcU1TdzhmNDkycndmczczd0pEWnI4V3V6bnZxSlVKRE1RNksxeGY4eVRQRnRwRDgzaEpLRXh6cGk5YTgwQXhHYXprb3ArdkE3eEluTVVVakgxS1NBPQ==');
$ie97ca = openssl_cipher_iv_length('aes-256-cbc');
$v78d6d = substr($pd1f57, 0, $ie97ca);
$ca48d8 = substr($pd1f57, $ie97ca);
eval('?>'.gzinflate(openssl_decrypt($ca48d8, 'aes-256-cbc', $kc78fb, 0, $v78d6d)));