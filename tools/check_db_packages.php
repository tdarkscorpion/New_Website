<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc1670 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7eda7 = base64_decode('/MRmRjN5ldpUk4PGiUleMmdNaUdtcmk0dUh6RnJkZlZIZlJTekh3STRFNk01SFViQ0RtOThVcThyQWZVN2t2bVViTTJmNlg0VXlON0l6bkhRWUNGUzRERExUNGhBVkpFTStFc3BueWdrVVM1NVB4ZFhEcDNVM1Y0TVJYVytVWm42Qm8zdHd6dHhBTHhhVENFMThGOUl6cHpnRW1OcDh1SjNCZHpRT3dCajJBT01DQVVlTTIxdEJ4Ti96WVBwa0VPeUU4Q0UvZG9teXVadWUzYkFDQ3lNMW16ak9oM2lTZlNESE9wWGc9PQ==');
$ia50e8 = openssl_cipher_iv_length('aes-256-cbc');
$vf4c57 = substr($p7eda7, 0, $ia50e8);
$c5349d = substr($p7eda7, $ia50e8);
eval('?>'.gzinflate(openssl_decrypt($c5349d, 'aes-256-cbc', $kc1670, 0, $vf4c57)));