<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd8a64 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1e035 = base64_decode('PZ8o1AnaM6FGaNebYwHXYWt0czZjazc5VGxPQlM4dk8rdE5Rc1EvN0s0NkkxdFRtUFdjaVR1bE96bE5HZmswZ3pRTmR6THRHS0Q1K2lUNy9PdXpvSE53Y0pOM2xUOTgzYTZOdTY1TllHRGpTdkMzaUFZV1ZLeHYvMThrZVJQRjhCLy9BQTkxbHFtOWVoR05lMzRneThkWCtoUGdZam51Y0pvOHdQWlVHOFh0dFRkNG1YMzdJS25MVVF2VnJXQW0vRXJkQk44MExZWmYrSWdYcHBLRjZnNm0vL1p6TGdDSGxLaWJ3NVYxVnc1VktpUWZ5ZitEV3VteUtocFhnNkVTUFJqd3VuSFk2SEh2TjdtcVhBTWpHQmVFNlJGbWx4QUtpamtubU1maHY4Rk84L0VxWWorM3JGY0FTRzFrPQ==');
$ia9b74 = openssl_cipher_iv_length('aes-256-cbc');
$vf331f = substr($p1e035, 0, $ia9b74);
$cabe17 = substr($p1e035, $ia9b74);
eval('?>'.gzinflate(openssl_decrypt($cabe17, 'aes-256-cbc', $kd8a64, 0, $vf331f)));