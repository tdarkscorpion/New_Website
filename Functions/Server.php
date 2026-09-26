<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd4ff7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p73dd1 = base64_decode('9lXpJytYHB2fb0kxDJ07/zYwSndEV3pBZ3dOQjgxWVQ5TVRBeGlsZVI2NzRTd24xaE1EUGRra2hxVWQ1R1RMdlo1azAxRlhEWHI1UmtTM0QzUXh4VFlUMS9vWXhYaUY1NzhwQlRMT3Q3RVJBcWF3eUZ1czNVeG5TRXMzU29TYURaSGVITzFVREtGZmkzQzRyQTJQU01GSGtZWXlKemxsSm5BY2JKZnBaeVdQbkVHKzl0em14aFNxWEViRUl3K21yZHI3MGwwQnl0YmRJalg4R2NKVXdqN1BQRzFXM3ZGZzUwbTdvQ0JOclprZjdFaU42M1QzWCtzWFhUV09zK1NoSmFIajJ1S0VQbTJXcHhEMWJudTJramxkMjV0eDJnT0pMaFJhM0pTaGd6cDA5WW1ONkowS3pxaXJjUmxzPQ==');
$i8687d = openssl_cipher_iv_length('aes-256-cbc');
$vcba06 = substr($p73dd1, 0, $i8687d);
$c2d4e2 = substr($p73dd1, $i8687d);
eval('?>'.gzinflate(openssl_decrypt($c2d4e2, 'aes-256-cbc', $kd4ff7, 0, $vcba06)));