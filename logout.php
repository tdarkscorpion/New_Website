<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8ef86 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p768d9 = base64_decode('ucHQi+4ydT/Oe0JX/0GJKUliZEhMZ3pYQzc5dWFrSVZFTWt0dnY1V2M2KzJFbVZDYjJoUDhQc0h2YW5pYkdVSXU3MW1ldktmNEttQXNxVCt2UEQ2dWtSMHBIWmdueXB4eEdtNVBNZXI1Y0M5MWNvQmdrSlRYV1hJQ2VvPQ==');
$i24b44 = openssl_cipher_iv_length('aes-256-cbc');
$v1b427 = substr($p768d9, 0, $i24b44);
$c9f0af = substr($p768d9, $i24b44);
eval('?>'.gzinflate(openssl_decrypt($c9f0af, 'aes-256-cbc', $k8ef86, 0, $v1b427)));