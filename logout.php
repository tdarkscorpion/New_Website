<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4c44a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5304a = base64_decode('2IiSut3uIKOIpej2Ktwm30hkYU5zWEx5RTcwSytmaXVOTXRVam1qYTI0cGN0cHBaQU8zcTZTRjQ1a1pFWjE4SjdHU3dVdklCdGw1SVIzMENEL1o4RXk1M1ZOaDdYMjVLUUcvdFlqOEsyNmY1NlRrSW01YUpsbzlzTGNBPQ==');
$ifa3f7 = openssl_cipher_iv_length('aes-256-cbc');
$vf6910 = substr($p5304a, 0, $ifa3f7);
$c8a656 = substr($p5304a, $ifa3f7);
eval('?>'.gzinflate(openssl_decrypt($c8a656, 'aes-256-cbc', $k4c44a, 0, $vf6910)));