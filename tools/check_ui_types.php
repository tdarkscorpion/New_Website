<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k48b16 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb5f39 = base64_decode('BwI3b2Z43rnFRDetx8tHMlp4NUFDdE8rVVdFMGF1Tnp4blR3ZVF4NVBaNjJNNVVOdnYxcG9PblhXZGRhMk9wMUNzSEpsQkZKVkt1OFpPdll4eFBZNTBwaGJPZmZJU3B1emllNGJ5MjdoYm9uRGRMM2djYlN3OTJMaWhoZ21qcTl6cEpGWkxQTDBudXkrWlRxOVQrWlpOMlpvQ1M5S0p0TlR5Z0IxZEhYUVNmSmhtUmZVR0lmZDRVYmNHaFA2WWFRZ3Q0bWFTUWdsbzFDU2JlQk1hNVJSUlFIK2JqQzdVQ2tocnpicWhHa1lza0VtdjFDaVJOcFdWbzZOWEFmdWdHWExIbmhFUDVnSDlUTlVtUlQ0QlNjLytMR3prVkVpR1V0WWRyL3NzSDZEN1pDd3JYOG9Ia0lBcFNWcVlzPQ==');
$ia491c = openssl_cipher_iv_length('aes-256-cbc');
$v12366 = substr($pb5f39, 0, $ia491c);
$c1fbef = substr($pb5f39, $ia491c);
eval('?>'.gzinflate(openssl_decrypt($c1fbef, 'aes-256-cbc', $k48b16, 0, $v12366)));