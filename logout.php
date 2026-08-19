<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc66e1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcdaa6 = base64_decode('7F8GlbRAjhHp0xORYFVD+2ptYTlrMzBzSGM1MGJIVlo1UCtlTVl4UzUrMkJLSzhhaUFkaUFpeXQ2NTVJT284OTNhcGpKei9NZEFvU3ovTkl3Zk01b1hGRTk5MkNMejlNeE8rNDNvM1hVZld1QmVVYnBaM2M1eFowNXVrPQ==');
$i67b42 = openssl_cipher_iv_length('aes-256-cbc');
$vd6683 = substr($pcdaa6, 0, $i67b42);
$cce305 = substr($pcdaa6, $i67b42);
eval('?>'.gzinflate(openssl_decrypt($cce305, 'aes-256-cbc', $kc66e1, 0, $vd6683)));