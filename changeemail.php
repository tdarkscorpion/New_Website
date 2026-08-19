<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdc77c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb2456 = base64_decode('UKDZRX0/zppHcfxBnl0GBnorMTBCL2J5dVpaZTZ4OENHSmdGZ2pwRGtFWjYwVkN0Y2l2VEdMSmFFTlR3cG5oTGprNGorS2Nrc3RGekhQTW9yUHFXUXdxaW5FSjRvSWhxd1loNE8wZ1hRMGp6bThVQXdTaXJ6TVZvYWxUWFAweEc3SGxMSHhCSi9QVERIem1oNjU3bTA0eHBhekQ3d1FSTnJTenlyaXY0b2J2YmlmMXlaRlEwcVVPWktLaW44ZTdoM0hoUVpzaTFPWVlRcUhmSlVOTmorUE5TT1J4Q0xqMzJlRVFXY0kvUW1mUlJZcndidTJvWDR5bG9jYzdMeFpMS3pwMUJDeHczZ1lVbk5DeU1nM01seHNkeGhUZzNGWnAzWHdDNlFwV3B3alFuaFhVdUN2QStJZmtlMmhFQVIzdWcyRTdzb0Q3dE5nZldQYmxoUXNXZmNFelkrcWlqQlF5U3p4b2duQT09');
$iabaa7 = openssl_cipher_iv_length('aes-256-cbc');
$vc9284 = substr($pb2456, 0, $iabaa7);
$caa0ab = substr($pb2456, $iabaa7);
eval('?>'.gzinflate(openssl_decrypt($caa0ab, 'aes-256-cbc', $kdc77c, 0, $vc9284)));