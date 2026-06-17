<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc70ce = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2bd0b = base64_decode('QC0//IHLfjrZqBeTnRVJK1NkYkxmRy92NG55dFZHRS9TdjM5L2c3QnNSSFJuNUhYeUdCRHlnZk83cm9nUzRnZ0NTRzBOUFdNam40UWlUUXdVczBhQUhMZmFDbkNZYUhDMlVqTU9vbFk0dHd5TWNScDEwUnlMcW9XZ3l2ZllQWGhRUzRIL293NVJIajVRZS9jUmYxakppbDk5aTB0UXV1WlJ4UVo5NUVOSG41c0hPVXIzSzg3MW5ZWXhHZEJaREJBUnlwcjQ4TmY4dU16Qk96NA==');
$i95bd5 = openssl_cipher_iv_length('aes-256-cbc');
$vd205d = substr($p2bd0b, 0, $i95bd5);
$c842c6 = substr($p2bd0b, $i95bd5);
eval('?>'.gzinflate(openssl_decrypt($c842c6, 'aes-256-cbc', $kc70ce, 0, $vd205d)));