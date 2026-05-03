<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k69473 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0c3b7 = base64_decode('xZc5bRHdclcgaDo7klEq9TlKVk9VTGdlWWFNbG42ekVjWUJxVTZzWmhIc3Jlc2VUNUh6c0pDdHpDa3JjZ2h2TTB3UlVyTzNiNHBhNUVkRVorZnhuUzhMaHNRZ3F5MThSbmJxWXdpRk9vNlRBcFRRQWJTVTA2MUloRlNpV0RXbjVtbnpkVXhCQlIwM3dFM1ZyeUVXeUJDNTBzYzdvcGZIckhjdFV1clZqQ2krTmF4aVRWcm91MmVIWENGTnRSMEhkc1VkYnUxNGRldHpGWDlPZXl2RHlzR2JjbWpQUzBML0xINWY3cjd3UVVZS3pzck5qREJlUGtOR2YwamxMK1EzeTQvSFdoWW1PYyt1UUgrVG5ycW8xdmxDdWtiUTdTWld3aCtReHhsYVRyVjZ5a0syVjJlREE0a213ZUN4S2J0Q214Q0NnTWxsMlF2R05SQmMx');
$idbb8f = openssl_cipher_iv_length('aes-256-cbc');
$v28390 = substr($p0c3b7, 0, $idbb8f);
$c90989 = substr($p0c3b7, $idbb8f);
eval('?>'.gzinflate(openssl_decrypt($c90989, 'aes-256-cbc', $k69473, 0, $v28390)));