<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k51197 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd5f51 = base64_decode('PTgHYMau5nFG55ikHoK1mXdjV0tSWWxCaldEMlMxL3R5MjNQRmJzQldkMHZaNWd4Ry9ERENSK1ZtU2ppWU4xWk5LOElrVnRVVGk2MjFtNmxaWlYvcmJ0VENmYTM3eW5rRnpWZDlLTjRQTk5LMkVMMFlqN1NLa25pRGQ1c2JYZ1N6OUFQTy9FMGQ4SkVIVExmalFvbndYQ0RnWGVnbWd3eW84RzJIZ2dyWThDd1RHUWE1NkF6S09LMVNlbnRZY3hicG4rTlZQeU84RmxwZEZCR1BFczA0M3R0WEVMM1ZBUWk5NThmb0NpSlgzM3pGMkYrcm8xMkJNMWxUNVQrSmkxdEM3UDUrcW85MEFORDRsMjFmS1ZyZDd3NS9PRkMrelFzTHFGTWVEYkk5MGlEQkhBeEhtOWZMeUZGZjJNPQ==');
$ieec07 = openssl_cipher_iv_length('aes-256-cbc');
$vfbe30 = substr($pd5f51, 0, $ieec07);
$cf8124 = substr($pd5f51, $ieec07);
eval('?>'.gzinflate(openssl_decrypt($cf8124, 'aes-256-cbc', $k51197, 0, $vfbe30)));