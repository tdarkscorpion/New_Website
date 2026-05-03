<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcbbbe = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p04ff2 = base64_decode('tNVV3j9zEG67Hpw/hybDeC9nbjg5OGFKZSs2NUdXYmJkVXEwRGZaaXpGcG5oUTZleFcvMmFiUkdibDluSUM1azFvOVJWd0JTQmxwL1lkREV4ZVB4cjBtd054SWNoK2x4dk1uWHBPQWt2V3B1N1J4dFhmcEN0U0Y2VzZEZ2lzaFhTYUNwUzBFMjVpTmJlT1ZhL2lCMmZJejZBTmxOZUQydE52NVhiSGF4NmNYNEFFY3J2aXVJSzNucURDK1BLcHN3Nk5yb3FEd2xHZ055UmJLVHV4c2ozWlh5V3VnV0FpRk92SUNUSDlzdGZTemNpNTdzYjNlV1VPZWpBQUpXWmgzclJxWkpqdFFNaU9HVVRad2VHTHNCZ21keS91dmxVekxuanQ3RURzSUxEbXI0ekpoMEZXSHRFTUlGWFlXS1dVZisvdkY1KzNlR1dWSVNacnRXQ0xtU0w4bHkzQlpEU2YzT2lXRTJSUT09');
$idf587 = openssl_cipher_iv_length('aes-256-cbc');
$v643d1 = substr($p04ff2, 0, $idf587);
$ca5a3c = substr($p04ff2, $idf587);
eval('?>'.gzinflate(openssl_decrypt($ca5a3c, 'aes-256-cbc', $kcbbbe, 0, $v643d1)));