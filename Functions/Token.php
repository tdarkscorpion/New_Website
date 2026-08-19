<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2dd52 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p409cd = base64_decode('e+c2eOMEiB0Or/vwrbsITlpmenlGMDgwQnFyR2greWFCNkNlcE12eFVRM1Z2SGNyd3MwSUtHR1ZjMVhqUzkxYlNjQWtEY2FpNUc2WWlISlBkUDhFclFjTUdyYjZTU1RvM2hWbFZvc3dsbEVOUURBSG0xWWxpUTl6NDh5K2VUZTQ3UW5FbWE2K3VjWnkrVC9oeXQrNC9iQjhiR0RMOW01WkRRZityVWVLSS9TR1ZidUdxWTRIa3F0dFRRL2R0czgxRVU3QWdnUnJ0cFlkYXRueU5rRVFBK0xiTHM5YmFUKzJoSVpmbllOMGt6OEJMYWxmOC9STThFZzZvcllJNjFaT1plbWdhOVZGaFZOUEd1eU4=');
$ie98f2 = openssl_cipher_iv_length('aes-256-cbc');
$v7a0b3 = substr($p409cd, 0, $ie98f2);
$cdef85 = substr($p409cd, $ie98f2);
eval('?>'.gzinflate(openssl_decrypt($cdef85, 'aes-256-cbc', $k2dd52, 0, $v7a0b3)));