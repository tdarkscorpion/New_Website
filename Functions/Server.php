<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf1a52 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7ae96 = base64_decode('dmmj1l8uRrtzrrCEXyLKVXlEVWRTM05sMXc5Y1gyUU9BRHdITjFFbytiaG9Zb1E2SDRvZ2pTUnFrQUowc2Z4WG5HREl2YWozTG5FS1lnWUZsS1NHeVl2dlRqZEtWRDVvZWxtR1l6aFZnU3g0RzdqbVliV1llbEtCYmh6by9QaFV0bll1am1yMkwrQlcvRXhzZUNCMW1BSGFaRUhKa3RiMDIyOFE5cGNKZkZUNkVzalo1bEU0RnhqVjZNRk9zWENtTXVnYUR6U1BvNWs5amRZNjA2S0N5RlVCSzZCSzVrT3J1aWRvdTltcWxxb3ZYcEdwME9jc3p5aTBXMXVyS1RnWGk5NXhKYkRDWTVoRGhlOVI4WVd0VkxyRnQ0MmtxaEp1QVV2WHQxcTRTdE9oRm1zRzVrRDU5ekVNbVBjPQ==');
$i7fba8 = openssl_cipher_iv_length('aes-256-cbc');
$v75428 = substr($p7ae96, 0, $i7fba8);
$c5c0ee = substr($p7ae96, $i7fba8);
eval('?>'.gzinflate(openssl_decrypt($c5c0ee, 'aes-256-cbc', $kf1a52, 0, $v75428)));