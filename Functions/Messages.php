<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbd94f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p76225 = base64_decode('uZ/45rMq2u+RpODy+PlgLGFGN0JSRTB1RldKZklSdGhxckRFMGtMejlLTGF5eHVnVFg1MVJLY28rSVBZL1dydFdEUjVpTStnYjAybjNxcWlIaVhDcW8wUGJxd09EQVNlVGprYXhkbW1NZEVpTU9aMGZiUnpOSlFNZFhwYThLZ21HWFdkcDMwc1VEOGRKcnl3OE9hMTd6NXVudDRyWTZnbmc4YnlTTGd4allDamhkbmp6THoxeHZMUE1NcmRBLzRubE9adUdrYkowRkErV3VWeG44UU4wM3RjTVRrbmN1VmhLYjY2ZXU0TXE3MU90dEJsTDJ4dTNuSzNNb2RtUVhQS0tEUHNYUCszMGQ0bHA1RlY4MjZ4UHdyY3dRcVl6YjQyaW9zZ2wzeDU1aGFtdkdHdncxMXlXY01laUZJPQ==');
$i91a82 = openssl_cipher_iv_length('aes-256-cbc');
$vcb2cd = substr($p76225, 0, $i91a82);
$ce1c05 = substr($p76225, $i91a82);
eval('?>'.gzinflate(openssl_decrypt($ce1c05, 'aes-256-cbc', $kbd94f, 0, $vcb2cd)));