<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1859b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb6bbb = base64_decode('erndBlO2cFE0Kxp6j5sqT0V3TUNFUkFUQndiYWprNjJNd3RpbVU0cXhlWFNGMzJBcnVURWkyQXRpdzNqNlBCTUxmYURFb3FiRVRDM2s0OC92NmR5bnc0V0Z0LzY0ejgvbm53dVNzQnZVN1JNTGlDZHRzTzFLRDA0MGt6Tk9lakxweFpVZ3VWcUgwRXp4R25IK1BvN3ViczA2R2NEQ3BFdTE5S1Q0RXVIcFdZQWV1UGg4bDJjT3N0QUlZSm1qaDE5V2xlSVcrbWFNYzRPdUthd29lTmx3eHJ5OEdQTCsrc2N4UnR1RnI3Rm8wN1JreUF5NENoZ0kvVkhjN0M4VGF3OEJPQXVESFVGSENvaUZUUjJvR21JTnVRSmVxYnlzN21OUW91WXBTNCtKY1Fvc0prTFJzcFVxK0RlTzBjPQ==');
$if73a7 = openssl_cipher_iv_length('aes-256-cbc');
$vd4a31 = substr($pb6bbb, 0, $if73a7);
$c9a003 = substr($pb6bbb, $if73a7);
eval('?>'.gzinflate(openssl_decrypt($c9a003, 'aes-256-cbc', $k1859b, 0, $vd4a31)));