<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka7c8b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p50a81 = base64_decode('EG/JADHXe3zMBl/Xo4FDPnl6ZXIwNDJDSzFVZldEMUh6Q01sZnVkanVIdWFnRkgxRzczL21KYkIrd2NlU1hHa2tyT3R3bHNEUnZuZkJ5Z0dMeDdyVGVocmdHVjljeEtoR2hMRE5DU2g4ZGx6THhCZm1EVWc3bFJ1MEpMK0tJdTk2K3ovSFQxUXZZU05Hb1BPNlJaV0tUMlVUL0ZwYjJXdHhPd3lHRjdhVHlnclpJR1BTT0FLVHNLTStHNWFpdHJNS0lTaUJJTlRJbEFaVllFeHRnWlFaRkZFK3NiWmFINEIxbWVDekg1eUQ0RE5zQ2dMYlZqYXBwblR4bExiMWpmYjVSdm9ST1YwYXhmTnR5U2l1S0pvelo1YWhkMjNYMzhidUtBZno4MzNLSTVZS0lPdE1acXo1ZVJnSWRZPQ==');
$i03a31 = openssl_cipher_iv_length('aes-256-cbc');
$v64b4d = substr($p50a81, 0, $i03a31);
$c3460b = substr($p50a81, $i03a31);
eval('?>'.gzinflate(openssl_decrypt($c3460b, 'aes-256-cbc', $ka7c8b, 0, $v64b4d)));