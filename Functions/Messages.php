<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdc8da = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$ped2fa = base64_decode('+DXNRatjqaNEHC/8KVIafUtVTExTK1BnaEZmWjV0YlBFa1h4TnF1Y2lLT3BoeEpPQzFCMitNZVVUQzVYZmdyZE5sOXJiSUN0T0s2NktLdjhrVVBwQ0hIR01mR0dnNW9yVDFOTzVvMThnMG5FVjFhT0Uwcm9pWjlDRTVsYzFSVTlZRVNmRktET3U1M3RPNmpBNG9OeDZyTDZsbzVTQWlYRVRlYUdKNW5ZQXUvNEhXSXF2UW9kcWRJNUZ2dlVtSEZ6TUtML2xTQ1ZETi9rd0x3NGhMZUdoMW9zTW05OTBDQVY0cjFBLy91SGlkbW1yU1l0NWZ6ZTBpalRMTS8vaWZZaEx2Q2xTTEdGaUU4dU9Qb2thRVhSL2wwOUN4ZGFPWFJId2Mrd2Y0OTYxTWZIclN3WEFkSC92R2wyajlrPQ==');
$i04d73 = openssl_cipher_iv_length('aes-256-cbc');
$v0d1f3 = substr($ped2fa, 0, $i04d73);
$cb9ecb = substr($ped2fa, $i04d73);
eval('?>'.gzinflate(openssl_decrypt($cb9ecb, 'aes-256-cbc', $kdc8da, 0, $v0d1f3)));