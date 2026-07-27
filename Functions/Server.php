<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc9285 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pde342 = base64_decode('ha6ESyeAJlu800UZEepXcFZXNUtESzFGUGgxN3NqbWNxd0ZnRUYvQ25zakZmRGhKTFBtTW9mdHJSNmJmRTJ1WHFiZ3lGNVExZ1pxZnpXT2VIK01QeFRXQUhyTEQxM3Y5bk5GdmI2ZmxjRzJWRXd2ZW02K0xTbVpZdktSN0tPcVZZUjB3aXhqL0p5WWxqT2JPNlpaanhQQUdFYjduR1lQVjNsYVo2ZWlZeHhMcVJWNzVUNU8wNU0zMGZiOVFYbnE5R2dHNExPQ0FvU1Fmc2FReFpRVkpjdEZHZ0xRMUpId2w5dFFWUDZlMHhBcm9EVEtTbStOTGFoeVgzRkNwOTVNVmZocmJSUzRHaVQzYTVadTVwUzFIcEhmOUZpZmgrdlVNSHIwRmtPWUJMUzlBK0hTTFhiN3RJVVREYTI0PQ==');
$i10c12 = openssl_cipher_iv_length('aes-256-cbc');
$v4ed2e = substr($pde342, 0, $i10c12);
$c1a69d = substr($pde342, $i10c12);
eval('?>'.gzinflate(openssl_decrypt($c1a69d, 'aes-256-cbc', $kc9285, 0, $v4ed2e)));