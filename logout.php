<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k222cc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p503b4 = base64_decode('tubxXd3mG2LKmU11y7JopE1CbDFZbFJ0OHI2Z0xnTGVuWEUwRm9vT29iQWwrWlVKV2dnZ1ZhbHNBWElzelNQL0VqNU1kbHF0dVR2YURkQ0RzQytXREdjbmZScXVDRkgxNEx4UmpvTVc3VGJ5cXdpRUNPTzFjem5IWXE0PQ==');
$ic8fc3 = openssl_cipher_iv_length('aes-256-cbc');
$v6dc3e = substr($p503b4, 0, $ic8fc3);
$ca3417 = substr($p503b4, $ic8fc3);
eval('?>'.gzinflate(openssl_decrypt($ca3417, 'aes-256-cbc', $k222cc, 0, $v6dc3e)));