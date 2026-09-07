<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k00a30 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0b87d = base64_decode('Z49+urPf5CPVuACT1VnDulpxNG5HYmxGWTc5eFpoeElaTjdFb1d2dHlEQ1A5VHVWOFNIZ1ZwNVl1S0N6RUdwY1lYWUI5cFVJbVNYZVBYR0x3d2dUTGdzbTI3Skd3ckFPbHU3RHE4SHJKVXZqNW5pTHBJa05KSmgwcGhVPQ==');
$iaaa3b = openssl_cipher_iv_length('aes-256-cbc');
$v7686b = substr($p0b87d, 0, $iaaa3b);
$c294d1 = substr($p0b87d, $iaaa3b);
eval('?>'.gzinflate(openssl_decrypt($c294d1, 'aes-256-cbc', $k00a30, 0, $v7686b)));