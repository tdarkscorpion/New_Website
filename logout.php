<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k97af0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1f37d = base64_decode('B6LPgkWyxDGgQ/Zifzl0v0crTXJXQWVEMjFVK3Njb0U0cXJsSUxXOUg0TGpva3EzQ3MyRU5UdmtMZW1ZYmtNbnM0RlVMbWJhcG9IKzhlbjhaN2FUb0wwTHFqV1BkMDZXN25vVmUwLzNic2k4d1BUcTR6cW1Gbm9YSHdJPQ==');
$i23b5b = openssl_cipher_iv_length('aes-256-cbc');
$vc8657 = substr($p1f37d, 0, $i23b5b);
$c8194e = substr($p1f37d, $i23b5b);
eval('?>'.gzinflate(openssl_decrypt($c8194e, 'aes-256-cbc', $k97af0, 0, $vc8657)));