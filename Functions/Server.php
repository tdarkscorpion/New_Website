<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k30194 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe4fab = base64_decode('1X+n6cu3Xz3M5kPT9tlKvnRUbVVlT01PVmVnVHNwL3dUa2c0amxoSUUyemM3TGltZWVLaXlTbGQzYnZJM1FNUlVRdG5QTTA0c0VxdHJxby9xOHhFTklzT0ZUSk5OdFh2SWl1bGhrMU8rNmlHREhkU0l4UHJCemltK3lEajdPT0NpWlNheTBzTWNGNitubUpqZUFGSTdLdDlDVnNaVzA4TTEzVkRCTEVleSt2L01tL1hzYWJBYXM2VTlIUFR0dzhmZE42WTdUUlFVdTRHQmJ5VzJuRWxyWTI5TUMvcUV2VjJFVVU4S1hMSGFRWlBoMm00Y2gxZDZZc0J6cWFQNUozNjFMRVN1TVRSL2t1enM1clAyRjc1TU9USzNIOURmU25PRXBHNzk0MmdmSXo2REs3dyt2YXd4QjRRVms0PQ==');
$if216b = openssl_cipher_iv_length('aes-256-cbc');
$v0c78b = substr($pe4fab, 0, $if216b);
$cdc129 = substr($pe4fab, $if216b);
eval('?>'.gzinflate(openssl_decrypt($cdc129, 'aes-256-cbc', $k30194, 0, $v0c78b)));