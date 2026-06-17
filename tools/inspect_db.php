<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k10008 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd7101 = base64_decode('7JFfVele6feNAtCGbAuZ0EVLbUh3Zk1tNEwrOVZldUxMNWJISkl2cVZlRFA3d0xOM2FKSFlvcjNaYzVuK09JMDRIT0xHc2xWZWpOUzg4RGcyWWs0RTBXZlI3ZVExcjlEblhOMXVzUWE3cU1Cd2xzNEYrcnlsN1dzSFlqcDltNHVqNEFqT0krV1ZPNVEyd2JHbzI2WGMweUJEUGsrYzNGU25lcWZ2WW82VHY1bmFrTVl6bjcweWhac2Q1d3lRME1MSmNFRGxjMURPczRVZDRRdTMrQndRc1h5Tmw4SDc5RktiMWNEQkE9PQ==');
$i50cc7 = openssl_cipher_iv_length('aes-256-cbc');
$va8387 = substr($pd7101, 0, $i50cc7);
$c7b2a2 = substr($pd7101, $i50cc7);
eval('?>'.gzinflate(openssl_decrypt($c7b2a2, 'aes-256-cbc', $k10008, 0, $va8387)));