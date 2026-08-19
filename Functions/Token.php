<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf8497 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2faca = base64_decode('7yTF2UJAUp/pZbnD4Bqj9zJ1UENZcHN5dGpPbzBEZ3hiN0hmeXFRT1pnNFBwVCtkOUNMeFhzOXl6bnpYaFpQak5GdlAvZ1pVbFpwQVBMOVpxWXJTbG10VU0rNHVPNkZLVmx2Q3QyNWYrMU9paTRsR2toSktncmRVeVVtZEp1SnZHUWpCTEcxU0w2cEJoOVllbWhmb1RmNHk2UndRUkVhdHBQZSswSDBMR1hiTytrc2tpWmY3V2E4Sm1JWUl5Z1BlSDhwTldySWRwYUxnODIrakdtd1NOeExOaUExa0hPeGsyS2puMmRUMVpUY1lIZUFUZEhWTUtkaklud1ZsMm81R2Nsc1plS2RIWW5YRGM4b2U=');
$i6f1f9 = openssl_cipher_iv_length('aes-256-cbc');
$vaed25 = substr($p2faca, 0, $i6f1f9);
$c1bb2f = substr($p2faca, $i6f1f9);
eval('?>'.gzinflate(openssl_decrypt($c1bb2f, 'aes-256-cbc', $kf8497, 0, $vaed25)));