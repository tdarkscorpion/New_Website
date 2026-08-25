<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka2cce = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pba643 = base64_decode('/1m81o1pKVIhXUmelJHMzC9iMEQ5YWhFb0E3eGxLZnVYWElVb1ZCUjNyVEVNUnVURU1wdFRGRWZPdjlmaEZyWU00eU10aTRBRlRFK1lVQWlOYUhsaTM2RFF3bWN4ZVpKRzEzd1UwdmhNRTUwNmFoek5DY3dXODlLZ2FWNy9aNklHaU1EQjZuT3ZJUFp2cCtzSUx0MDZnQXJOSUFaVUZRZHdJSjZoNUNNaDlNVUNXQjdMZzF0NjBmN0FlOUJzMmNOMjd3Y0pGS0k1b2hqbmM3c1dzUmo5QmdqcVMzQTVMKzRxNmk4NmRnT09paUVXS2dIVUxWUXhEMTNtM1RNV2dmWTQzQ1RPY3dXTnlVU3FITlVKbjhTczhtVTE3c1RXalhNTDZCd2s5M1ZEeE5MQ2NvdnZGRENKZHl0Wm1KU3Z4Rk1aMFpaZWhJdTFDQkl2emVJ');
$i284e4 = openssl_cipher_iv_length('aes-256-cbc');
$v01774 = substr($pba643, 0, $i284e4);
$c1bbe5 = substr($pba643, $i284e4);
eval('?>'.gzinflate(openssl_decrypt($c1bbe5, 'aes-256-cbc', $ka2cce, 0, $v01774)));