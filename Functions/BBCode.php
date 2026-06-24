<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k679ee = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p40136 = base64_decode('k71yytc2oROuqH82CVd/8VlIbUI2ZkpHWnBEdnNwZ3ROM2dTY3AxSTAyeHE5Z2ZqVVFIeHU5YjFCL2ZwRllrcUxhaS92MlMrRG8zYVZYenAzTVpqbTFpNnBlVTcra0tkRzhKbzdTeXJtMzZPUkQwSnBBTG8rTExtT3VPdklDaVFsY3AvWWIxd3BZNHZCNkpidis5enhkUDRGbDFaL2hTdytGbFRKWXdBdXVTalNUTUZ6QjlQYjUvbkgySmpCaURUSngxcE9pQU1wRXZoZmxoSnFueE96YjZ4MWowVllYRDBuTDFBVHQzY200Ym9wRzRVOGZCbDVLMWJtN09XeTlmV1U4TnB6SGJWZnZoTUhVWkI3VmV0My9RRE1ZcFRrUWtPUEdxN0NhQUlUT3ZwMHFvMTlJYzFPVTMyRWN0L3Vqbkd1bjl0WXhzZlVnaTFjV0lV');
$id0441 = openssl_cipher_iv_length('aes-256-cbc');
$v56f63 = substr($p40136, 0, $id0441);
$c5da89 = substr($p40136, $id0441);
eval('?>'.gzinflate(openssl_decrypt($c5da89, 'aes-256-cbc', $k679ee, 0, $v56f63)));