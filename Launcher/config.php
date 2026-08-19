<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbae2f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf0e93 = base64_decode('Pll2rAv9YK0EzpJ6xAI0ZzVRY0k5a093eW54RXN3NlVxbEhMTDkxcHdlQjNSak1pTHgrQzA0K0ora1hJbm5qVXhKUitzdXdsTFZxZXhBSXNBVnAyc0tPUFUvNU9LbThrZDdLb0R1UE9Ca1NoTng3Q0IzTnFJWTI3Q3E0eCtXRUpIOEdGQnhsWWNEMTJjNkVkOCs0bllUNkRQZ0l6UWFJcjBodDNGbWZGdnFiVVNaWlQ0Y2cxQUp2a3NBT21WSWRDc1Q2endVc3NDdjB3Nk9wenVuaGNtVU5jcStzanhyUFFKcWQrVzFUZStDZWg1ZGMwWjc3eUNEcy9xY0pXaHVjWUkrTlJCSzBNNVFMbG9VeGpBSzZyUXRKVHgrT2dGd3BtLzcvSDVhc1BOdFNZY0JCblhYdmp1U3dwZjdJPQ==');
$i7b9c5 = openssl_cipher_iv_length('aes-256-cbc');
$v8adaf = substr($pf0e93, 0, $i7b9c5);
$c46d01 = substr($pf0e93, $i7b9c5);
eval('?>'.gzinflate(openssl_decrypt($c46d01, 'aes-256-cbc', $kbae2f, 0, $v8adaf)));