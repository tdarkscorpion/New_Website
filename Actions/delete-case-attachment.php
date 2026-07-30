<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbc465 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa5a49 = base64_decode('NkBXRh/FBIMXr99271keH3dnZkpsZy9GQlBIYzhUUzBQV1F2cUoydXhLZ0Rtc3lZb3BEZVBqZExEZGZIbWxOeE9odEdPcEtZTFNTaFpUZDNEMjlzTlpLSG81Z0haMGNUNU1Samp2bk9UWDlUaFovQ1BWUUc5cmhreHpHNjJRNXhDQkpPWnVTaGFMVCt0RktabXFFQ1ZDbHFmREJWVEdwTFdqcWlXRlRIc1hmMmE1TEZGaXRVbzdUdU82MCt5TERlaitvZERnODVxa0JQQWlFaTl2bFdJTXhEbWVFMHdpenY3VVFsY0pJWGgzbUpwelB1U2h0S0NRMDVUZ0FPaC9jenQxQVJzenBNem1sZUVmRDhzK21jZ0xGWkZpdWFKdnorbUZRbmlaa25UV1lMQVJWVGp4SlAzM0FpekRSa2F3Zlc3MW5XeGdsUXpVbXJrZWE2');
$i6be38 = openssl_cipher_iv_length('aes-256-cbc');
$v4b392 = substr($pa5a49, 0, $i6be38);
$c590a4 = substr($pa5a49, $i6be38);
eval('?>'.gzinflate(openssl_decrypt($c590a4, 'aes-256-cbc', $kbc465, 0, $v4b392)));