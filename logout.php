<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcfb44 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p498a0 = base64_decode('hG0jDdw98RqYzX3wiRunpzl5cFR0dncvTkhsWHR2Y2g3UFBGamRua0hRQURLRGx6S2NZQkdhVld5a2FRaVNUb2c0VlBEWmhxT0tpYlV0azYzbStwSHdDTDJ0cVpSNGV3Mkp2dVErbU4zYTcxMENuSGQ2MEVFTElGNDZrPQ==');
$i68bf5 = openssl_cipher_iv_length('aes-256-cbc');
$v0e8e0 = substr($p498a0, 0, $i68bf5);
$c78f7d = substr($p498a0, $i68bf5);
eval('?>'.gzinflate(openssl_decrypt($c78f7d, 'aes-256-cbc', $kcfb44, 0, $v0e8e0)));