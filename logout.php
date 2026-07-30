<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9dfd8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf1389 = base64_decode('v2HyMVsO+Tq7R0iPTll04kh0UEo5VEluR0V6QkRDOGdDcGphMG1FeE1DS0hCM0FjRTJYQjc4T1hqNXdFdWVpNVh6cFZtUHBFMWdjTUwwZzVkOHRRMXYza3A4ZFNBS1ZiWFQ5dUprOS9HSzZUcVo5cTVrcGVsYVBoY1NjPQ==');
$ia42b4 = openssl_cipher_iv_length('aes-256-cbc');
$v69022 = substr($pf1389, 0, $ia42b4);
$c66407 = substr($pf1389, $ia42b4);
eval('?>'.gzinflate(openssl_decrypt($c66407, 'aes-256-cbc', $k9dfd8, 0, $v69022)));