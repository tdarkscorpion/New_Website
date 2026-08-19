<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaa0af = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p19352 = base64_decode('YaulDltFR0ICBClBXN55BVdDdXVHMGttV3lCVWRCLzZwSFpZOXRRZFJrRUtDdXpLa2FwVnZpcmFxU0xydURZaVVTVkd6WlV5aElrZVh3Y2dRbS9kc0VpTEZaWk1aWXFOV3Vsdi9jckh4VUhiUFdaTTlQSW1Ub2txN0dvPQ==');
$i652c7 = openssl_cipher_iv_length('aes-256-cbc');
$v66070 = substr($p19352, 0, $i652c7);
$c42f0b = substr($p19352, $i652c7);
eval('?>'.gzinflate(openssl_decrypt($c42f0b, 'aes-256-cbc', $kaa0af, 0, $v66070)));