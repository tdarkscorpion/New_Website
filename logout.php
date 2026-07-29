<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0097e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd2c65 = base64_decode('4JaYillhLRBuMhmS7lcia2Q3cnNQV0dNRVd4cTdDeUxEWTV0eENYR1RXZndmRG11L200dzY4T0ZuSVVoZDJQeHJ4UERiK0Z2cUwwZXlnVHlDSWwwcFE2d1oycUxkazNBOE1OdE5MbHNHaHNyWGc4L2lraExyVDkwTkdrPQ==');
$ibbae5 = openssl_cipher_iv_length('aes-256-cbc');
$v2ae14 = substr($pd2c65, 0, $ibbae5);
$ccf9e7 = substr($pd2c65, $ibbae5);
eval('?>'.gzinflate(openssl_decrypt($ccf9e7, 'aes-256-cbc', $k0097e, 0, $v2ae14)));